<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('asset/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('asset/assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{ route('login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  @csrf
                  <img src="{{asset('asset/assets/images/logos/dark-logo.svg')}}" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                @if (session('eror'))
                <div class="alert alert-danger">
                    <b>Opps!</b>{{Session('error')}}
                    <br>
                    Tolong periksa kembali username atau password anda.
                </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    @error('username')
                    <p>{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                  </div>
                      <a href="{{route('login')}}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('asset/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('asset/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>