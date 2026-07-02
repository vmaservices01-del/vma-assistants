<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Protected</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; text-align: center; }
        input[type="password"] { width: 100%; padding: 12px; margin: 15px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #3490dc; color: white; border: none; padding: 12px; width: 100%; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #2779bd; }
        .error { color: #e3342f; font-size: 14px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Enter Password</h2>
        <p>This website is currently private. Please enter the password to view the content.</p>
        
        <form action="{{ route('frontend.password.verify') }}" method="POST">
            @csrf
            <input type="password" name="password" placeholder="Password" required autofocus>
            
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>