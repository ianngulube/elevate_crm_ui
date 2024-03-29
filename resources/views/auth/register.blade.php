<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - ELEVATE</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- Basic login form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Please complete details below!</h3></div>
                                    <div class="card-body">
                                        <!-- Login form-->
                                      <div class="text-center">
                                      
            
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" for="name">Fullname</label>
                        <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter  name" value="{{ old('name') }}" />
                        @error('name')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label class="small mb-1" for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="{{ old('email') }}"/>
                @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" for="password">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="Enter password"   />
                        @error('password')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" for="password_confirmation">Confirm Password</label>
                        <input  class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm password" />
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center">
                    <button class="btn btn-primary btn-block text-light" type="submit" >Sign Up Now</button></div>
                    </div>
        </form>
    </div>
    <div class="card-footer text-center">
        <div class="small"><a href="{{ url('/login') }}">Have an account? Go to login</a></div>
        </div>

        <div class="card-footer text-center">

    </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Elevate CRM 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
