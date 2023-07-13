<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Client Register</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{asset('assets-login/css/bootstrap-login-form.min.css')}}" />
</head>

<body>
  <!-- Start your project here-->
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
  
                <form method="POST" action="">
        @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #669869;"></i>
                      <span class="h1 fw-bold mb-0">DecouplIN</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register Here</h5>

                    <div class="form-outline mb-4">
                      <input type="name" id="form2Example17" :value="__('Name')" class="form-control form-control-lg" required />
                      <label class="form-label" for="form2Example17">Name</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" :value="__('Email')" class="form-control form-control-lg" required />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" :value="__('Password')"  class="form-control form-control-lg"  required/>
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
                      <button class="btn btn-dark btn-lg btn-block"> {{__('Register')}}</button>
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
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{asset('assets-login/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>