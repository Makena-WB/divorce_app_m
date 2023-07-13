<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Confirm Password</title>
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

  <section class="vh-100" style="background-color:#ffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="/images/logo.jpeg" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"  />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #669869;"></i>
                      <span class="h1 fw-bold mb-0">DecouplIN</span>
                    </div>

                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-outline mb-4">
                      <input type="password" id="password" name="password"  class="form-control form-control-lg"  required autocomplete="new-password"/>
                      <label class="form-label" for="password" :value="__('Password')" >Password</label>
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <div class="flex justify-end mt-4">
        <button class="btn btn-dark btn-lg btn-block">{{__('Confirm')}}</button>
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