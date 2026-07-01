<?php

namespace Database\Seeders;

use App\Models\FormSubmission;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FormSubmissionSeeder extends Seeder
{
    public function run()
    {
        $forms = ['Contact Us', 'Newsletter', 'Support Ticket', 'Quote Request'];

        for ($i = 0; $i < 50; $i++) {
            FormSubmission::create([
                'form_name' => $forms[array_rand($forms)],
                'data' => json_encode([
                    'name' => 'User ' . ($i + 1),
                    'email' => 'user' . ($i + 1) . '@example.com',
                    'message' => 'This is a test message number ' . ($i + 1)
                ]),
                // Randomize dates within the last 30 days to test the filters
                'created_at' => Carbon::now()->subDays(rand(0, 30)),
            ]);
        }
    }
}