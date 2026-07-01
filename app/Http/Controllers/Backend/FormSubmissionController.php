<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Mail; 
use App\Mail\AdminDiscoveryCallNotification;

class FormSubmissionController extends Controller
{
    public function index(Request $request)
    {
        $query = FormSubmission::query();

        // Apply Date Filters
        if ($request->filled('from')) {
            $query->whereDate('created_at', '>=', $request->from);
        }
        if ($request->filled('to')) {
            $query->whereDate('created_at', '<=', $request->to);
        }

        $submissions = $query->latest()->paginate(10)->withQueryString();
        return view('backend.forms.index', compact('submissions'));
    }

    public function storeDiscoveryCall(Request $request)
    {
        // 1. Validate the data
        $validated = $request->validate([
            'first_name'    => 'required|string|max:100',
            'last_name'     => 'required|string|max:100',
            'email'         => 'required|email|max:255',
            'country'       => 'required|string',   // New Field
            'dial_code'     => 'required|string',   // New Field
            'phone'         => 'required|string|max:20',
            'practice_name' => 'required|string|max:255',
            'industry'      => 'required|string',
            'referral'      => 'required|string',
        ]);

        $fullPhoneNumber = $request->dial_code . ' ' . $request->phone;
        
        // 2. Store in your JSON-based table
        $submission = FormSubmission::create([
            'form_name' => 'Discovery Call',        
            'data' => array_merge($request->except(['_token']), ['full_phone' => $fullPhoneNumber]),

        ]);

        $mailsub = Mail::to('legendzdvp@gmail.com')->send(new AdminDiscoveryCallNotification($submission));

        return back()->with('success', 'Thank you! We will reach out shortly.');
    }

    public function export(Request $request)
    {
        $query = FormSubmission::query();
        if ($request->filled('from')) $query->whereDate('created_at', '>=', $request->from);
        if ($request->filled('to')) $query->whereDate('created_at', '<=', $request->to);

        $response = new StreamedResponse(function() use ($query) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['ID', 'Form Name', 'Data', 'Date Submitted']);

            $query->chunk(500, function($submissions) use($handle) {
                foreach($submissions as $sub) {
                    fputcsv($handle, [$sub->id, $sub->form_name, $sub->data, $sub->created_at]);
                }
            });
            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="filtered_forms.csv"');
        return $response;
    }

    public function show($id)
    {
        $submission = FormSubmission::findOrFail($id);
        return view('backend.forms.show', compact('submission'));
    }

    public function destroy($id)
    {
        FormSubmission::findOrFail($id)->delete();
        return redirect()->route('backend.forms.index')->with('success', 'Record deleted successfully.');
    }

    public function destroyMultiple(Request $request)
    {
        $ids = $request->ids; // Array of IDs from checkboxes
        FormSubmission::whereIn('id', $ids)->delete();
        return back()->with('success', 'Selected records deleted successfully.');
    }


}