<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Reset Password</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{asset('assets-login/css/bootstrap-login-form.min.css')}}" />
</head>

<form method="POST" action="{{ route('password.store') }}">
        @csrf
  
<body>

  <section class="vh-100" style="background-color:#ffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="/images/logo.jpeg"
                  alt="login form"
                  class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #669869;"></i>
                      <span class="h1 fw-bold mb-0">DecouplIN</span>
                    </div>

          <!-- Password Reset Token -->
          <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" :value="old('email', $request->email)" class="form-control form-control-lg" required autocomplete="username"/>
                      <label class="form-label" for="email"  :value="__('Email')" >Email address</label>
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control form-control-lg"  required autocomplete="new-password"/>
                      <label class="form-label" for="password" :value="__('Password')" >Password</label>
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

          <div class="form-outline mb-4">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg"   required autocomplete="new-password"/>
                      <label class="form-label" for="password_confirmation"  :value="__('Confirm Password')" >Confirm Password</label>
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-dark btn-lg btn-block">{{__('Reset Password')}}</button>
        </div>

              
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MDB -->
  <script type="text/javascript" src="{{asset('assets-login/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>