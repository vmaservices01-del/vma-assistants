@extends('backend.layouts.app')

@section('content')
<!-- The 'container' wrapper handles side margins, 'py-8' handles top/bottom -->
<div class="container mx-auto px-4 md:px-6 py-8">

    <!-- Top Action Bar -->
    <div class="mb-8">
        <a href="{{ route('backend.forms.index') }}" 
           class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
            Back to Submissions
        </a>
    </div>

    <!-- Main Content Container -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
        
        <!-- Header Section -->
        <div class="px-6 py-8 border-b border-gray-100 flex flex-wrap justify-between items-start gap-4">
            <div class="py-4">
                <h2 class="text-2xl font-extrabold text-gray-900 leading-tight">
                    Submission #{{ $submission->id }}
                </h2>
                <div class="mt-2 flex items-center gap-3">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-50 text-blue-700 uppercase tracking-wide">
                        {{ $submission->form_name }}
                    </span>
                    <span class="text-sm text-gray-400">
                        {{ $submission->created_at->format('M d, Y') }} at {{ $submission->created_at->format('h:i A') }}
                    </span>
                </div>
            </div>        
        </div>

        <!-- Details Grid Section -->
        <!-- Details Grid Section -->
        <div class="p-6 md:p-10">
            <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-6 px-2">Form Data Details</h3>
            
            <!-- We check if it's an array to be safe -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @if(is_array($submission->data))
                    @foreach($submission->data as $key => $value)
                        <div class="group bg-gray-50 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-white hover:shadow-md transition-all duration-300">
                            <!-- Format Key: 'first_name' -> 'First Name' -->
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 group-hover:text-blue-600 transition-colors">
                                {{ ucwords(str_replace('_', ' ', $key)) }}
                            </label>
                            
                            <p class="text-slate-900 font-semibold text-lg break-words leading-tight">
                                @if(is_array($value))
                                    {{ json_encode($value) }}
                                @else
                                    {{ $value }}
                                @endif
                            </p>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full p-10 text-center bg-slate-50 rounded-2xl border-2 border-dashed">
                        <p class="text-slate-400">No data found in this submission.</p>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Optional Footer Spacing -->
        <div class="px-6 py-6 border-t border-gray-50 text-center">
            <p class="text-xs text-gray-400">End of submission data</p>
        </div>
    </div>
</div>
@endsection