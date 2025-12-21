<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My App</title>
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Segoe UI", sans-serif;
        }
        .card {
            background: #fff;
            width: 380px;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
        }
        .card h2 {
            margin-bottom: 25px;
            font-size: 1.8rem;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            font-size: 0.95rem;
            color: #444;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ddd;
            outline: none;
            transition: 0.3s;
        }
        .form-group input:focus {
            border-color: #2575fc;
            box-shadow: 0 0 8px rgba(37,117,252,0.3);
        }
        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-check input {
            margin-right: 8px;
        }
        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background: linear-gradient(135deg, #0056b3, #2575fc);
            transform: translateY(-2px);
        }
        .extra-links {
            margin-top: 15px;
            font-size: 0.9rem;
        }
        .extra-links a {
            color: #2575fc;
            text-decoration: none;
            transition: 0.3s;
        }
        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" 
                       class="@error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" 
                       required autocomplete="email" autofocus>
                @error('email')
                    <span style="color:red; font-size:0.85rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" 
                       class="@error('password') is-invalid @enderror" 
                       name="password" required autocomplete="current-password">
                @error('password')
                    <span style="color:red; font-size:0.85rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                    {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn">Login</button>

            @if (Route::has('password.request'))
                <div class="extra-links">
                    <p><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                </div>
            @endif
        </form>
    </div>
</body>
</html>
