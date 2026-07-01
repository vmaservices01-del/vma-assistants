<!DOCTYPE html>
<html>
<head>
    <title>Website Protected</title>
</head>
<body>

<h2>Website Preview</h2>

<form method="POST" action="{{ route('frontend.password.submit') }}">
    @csrf

    <input
        type="password"
        name="password"
        placeholder="Enter Password"
    >

    @error('password')
        <div>{{ $message }}</div>
    @enderror

    <button type="submit">
        Enter
    </button>
</form>

</body>
</html>