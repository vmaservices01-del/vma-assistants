<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7f9; margin: 0; padding: 40px; }
        .container { background-color: #ffffff; padding: 40px; border-radius: 12px; border: 1px solid #e2e8f0; max-width: 600px; margin: 0 auto; }
        .header { border-bottom: 2px solid #0084ff; padding-bottom: 20px; margin-bottom: 30px; }
        .title { color: #002d5b; font-size: 24px; font-weight: 800; margin: 0; }
        .data-row { padding: 12px 0; border-bottom: 1px solid #f1f5f9; }
        .label { color: #64748b; font-size: 11px; text-transform: uppercase; font-weight: 700; margin-bottom: 4px; display: block; }
        .value { color: #1e293b; font-size: 16px; font-weight: 500; }
        .footer { margin-top: 30px; text-align: center; color: #94a3b8; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">New Discovery Call</h1>
            <p style="color: #64748b;">A new lead has just submitted a request on your website.</p>
        </div>

        @foreach($submission->data as $key => $value)
            <div class="data-row">
                <span class="label">{{ str_replace('_', ' ', $key) }}</span>
                <div class="value">{{ is_array($value) ? json_encode($value) : $value }}</div>
            </div>
        @endforeach

        <div class="footer">
            <p>View this submission in your <a href="{{ route('backend.forms.show', $submission->id) }}">Admin Panel</a>.</p>
            <p>&copy; {{ date('Y') }} VMA Service Inc. All rights reserved.</p>
        </div>
    </div>
</body>
</html>