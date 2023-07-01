<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Climays</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Icon Title Web -->
  <link rel="icon" type="image/png" href="/img/climays.svg" sizes="300x300" />

  <style>
    .form-group {
      position: relative;
    }
  
    .form-group .eye-toggle {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      background: transparent;
      border: none;
      padding: 0;
    }
  
    /* Customize password input style */
    .password-input {
      border-radius: 25px;
      padding-left: 15px;
      padding-right: 40px; /* Ubah dari 15px menjadi 40px */
      border-radius: 25px !important; /* Tambahkan !important untuk mengatasi konflik CSS */
    }
  
    /* Rounded border for eye toggle button */
    .eye-toggle {
      border-radius: 25px;
    }
    
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar disini</h1>
              </div>
              <form action="{{ route('register') }}" method="POST" class="user" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                      id="exampleFirstName" placeholder="Name" name="name" value="{{ old('name') }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                    name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="input-group">
                      <input type="password" class="form-control form-control-user password-input @error('password') is-invalid @enderror" id="exampleInputPassword" name="password" placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text eye-toggle">
                          <i class="fas fa-eye"></i>
                        </span>
                      </div>
                    </div>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input type="password" class="form-control form-control-user password-input" id="exampleRepeatPassword" name="password_confirmation" placeholder="Repeat Password">
                      <div class="input-group-append">
                        <span class="input-group-text eye-toggle">
                          <i class="fas fa-eye"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  {{ __('Register') }}
                </button>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Sudah memiliki akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script>
    const togglePassword = document.querySelectorAll('.eye-toggle');
    const passwordInputs = document.querySelectorAll('input[type="password"]');

    togglePassword.forEach((toggle, index) => {
      toggle.addEventListener('click', function () {
        const type = passwordInputs[index].getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInputs[index].setAttribute('type', type);

        if (type === 'password') {
          this.innerHTML = '<i class="fas fa-eye"></i>';
        } else {
          this.innerHTML = '<i class="fas fa-eye-slash"></i>';
        }
      });
    });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
