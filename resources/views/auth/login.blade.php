<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/sass/app.scss')
</head>

<body style="background-color: #007bff;">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 text-center" style="width: 350px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);">
            <div class="mb-4">
                <div class="logo mb-3">
                <div class="d-flex justify-content-center align-items-center mb-3" 
             style="width: 60px; height: 60px; background: #007bff; clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%); margin-left: auto; margin-right: auto;">
            <i class="bi bi-hexagon-fill text-white" style="font-size: 0px;"></i>
        </div>
                </div>
                <h5 class="mb-4 text-uppercase font-weight-bold" style="color: #333;">Employee Data Master</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-box-arrow-in-right"></i> Log In
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>