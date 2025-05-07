<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex justify-content-center mt-5">
    <div class="card shadow-lg bg-white rounded" style="width: 18rem;">
        <div class="p-4">
            {{-- @if(session()->has('message'))
                <h6 style="color: red">{{ session('message') }}</h6>
            @endif --}}
            <form method="POST" action="{{route('do.login') }}">
                @csrf
                <div class="form-outline mb-4">
                    <input name="email" type="email" class="form-control" required />
                    <label class="form-label">Email address</label>
                </div>

                <div class="form-outline mb-4">
                    <input name="password" type="password" class="form-control" required />
                    <label class="form-label">Password</label>
                </div>

                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>

                <div class="text-center">
                    <p>Not a member? <a href="{{ route('users.create') }}">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
