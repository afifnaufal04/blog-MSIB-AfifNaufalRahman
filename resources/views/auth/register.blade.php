<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container w-75 d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <div class="col-md-7 right-box">
              <div class="row align-items-center mx-2 ">
                <div class="header-text mb-4 text-center">
                    <h2 class="fw-bold">Welcome</h2>
                    <p>We are happy to see you here</p>
                </div>
                <form action="{{ url('/register') }}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name</label><br>
                        <input type="text" name="name" id="name" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password_confirmation">Confirm Password</label><br>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password">
                    </div><br>
    
                    <div class="form-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Submit</button>
                    </div>
                    <div class="form-group mb-3">
                        <a href="{{route('dashboard')}}" class="btn btn-secondary fs-6">Back</a>
                    </div>
                </form>
                
                <div class="row mx-1 text-center">
                    <small class="text-secondary">already have account? <a href="{{ url('/login') }}" class="text-decoration-none">Sign in</a></small>
                </div>
              </div>
            </div>

            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box bg-primary">
                <div class="featured-image mb-3">
                    <img src="rb_1262.png" class="img-fluid" alt="img" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Blog MSIB</p>

                <small class="text-white text-wrap text-center" style="font-family: 'Courier New', Courier, monospace;">Let's Join Us Here </small>

            </div>
        </div>

    </div>
</body>
</html>
