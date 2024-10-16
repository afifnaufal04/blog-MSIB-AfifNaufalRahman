<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container w-75 d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
        
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-primary">
                <div class="featured-image mb-3">
                    <img src="rb_1262.png" class="img-fluid" alt="img" style="width: 300px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Blog MSIB</p>

                <small class="text-white text-wrap text-center" style="font-family: 'Courier New', Courier, monospace;">Let's Get in</small>

            </div>

            <div class="col-md-6 right-box">
              <div class="row align-items-center mx-3">
                <div class="header-text mb-4 text-center">
                    <h2 class="fw-bold">Hello, again</h2>
                    <p>We are happy to have you back</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mx-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label><br>
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label><br>
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
    
                    <div class="form-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>

                    <div class="form-group mb-3">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
                    </div>

                </form>
                
                <div class="row mx-1 text-center">
                    <small class="text-secondary">Don't have account? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a></small>
                </div>
                
            </div>
            </div>
        </div>

    </div>
</body>
</html>
