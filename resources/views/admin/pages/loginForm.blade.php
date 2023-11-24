@extends('admin.layouts.app')

@section('js')
@vite(['resources/js/plugins/jquery-validation/jquery.validate.min.js','resources/js/pages/be_forms_validation.min.js'])
@endsection

@section('content')
  <!-- Hero -->
  <div class="hero-static content content-full px-1">
    <div class="row mx-0 justify-content-center">
      <div class="col-lg-8 col-xl-6">
        <!-- Header -->
        <div class="py-4 text-center">
          <a class="link-fx fw-bold" href="index.php">
            <i class="fa fa-fire"></i>
            <span class="fs-4 text-body-color">PP</span><span class="fs-4">M3</span>
          </a>
          <h1 class="h3 fw-bold mt-4 mb-1">
            Bienvenido al Panel de Administración
          </h1>
          <h2 class="fs-5 lh-base fw-normal text-muted mb-0">
            Pasaje Navarra
          </h2>
        </div>
        <!-- END Header -->

        <!-- Sign In Form -->
        <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation-signin" action="admin/pass" method="POST">
          <div class="block block-themed block-rounded block-fx-shadow">
            <div class="block-header bg-gd-dusk">
              <h3 class="block-title">Ingresar</h3>
            </div>
            <div class="block-content">
              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Ingresar su cuenta de correo">
                <label class="form-label" for="login-username">E-mail</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Ingresar su contraseña">
                <label class="form-label" for="login-password">Contraseña</label>
              </div>
              <div class="row">
                <div class="col-sm-6 d-sm-flex align-items-center push">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="login-remember-me">
                    <label class="form-check-label" for="login-remember-me">Recordarme</label>
                  </div>
                </div>
                <div class="col-sm-6 text-sm-end push">
                  <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                    Ingresar
                  </button>
                </div>
              </div>
            </div>
            <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
              
            </div>
          </div>
        </form>
        <!-- END Sign In Form -->
      </div>
    </div>
  </div>
  <!-- END Hero -->
@endsection
