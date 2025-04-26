
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Include Bootstrap & Font Awesome or MDB -->
</head>
<body>

<div class="d-flex justify-content-center mt-5">
    <div class="card shadow-lg bg-white rounded" style="width: 18rem;">
        <div class="p-4">
            
            @if(session()->has('message'))
                <h6 style="color: red">{{ session()->get('message') }}</h6>
            @endif

            <form method="POST" action="{{route('do.login') }}">
                @csrf

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input name="email" type="email" id="form2Example1" class="form-control" required />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input name="password" type="password" id="form2Example2" class="form-control" required />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- Submit button -->
                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>

                <!-- Register links -->
                <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                    <p>or sign in with:</p>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
