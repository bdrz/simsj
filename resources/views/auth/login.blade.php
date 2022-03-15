@extends('dashboard.authBase')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card-group shadow">
        <div class="card p-2 px-4">
          <div class="card-body text-left">
            <span class="h4"><b>Login</b></span>
            <hr class="m-1">
            <form method="POST" action="{{ route('login') }}" class="mt-2">
              @csrf
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text  text-dark">
                    <svg class="c-icon">
                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                    </svg>
                  </span>
                </div>
                <input class="form-control" type="text" placeholder="Username" name="email" value="{{ old('email') }}"
                  required autofocus>
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text text-dark">
                    <svg class="c-icon">
                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                    </svg>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
              </div>
              <div class="row">
                <div class="col-12 text-center">
                  <button class="btn btn-outline-dark px-4 btn-pill"
                    type="submit">{{ __('LOGIN') }}</button>
                </div>
            </form>

          </div>
        </div>
      </div>
      {{--  <div class=" text-white pt-5 d-md-down-none" style="width:44%;background-color: #3c4b64;"> --}}
      <div class="text-white pt-2 d-md-down-none" style="width:44%; height:200%;background:url('/assets/login/bg.jpg');background-size:100% 100%">
        <div class="card-body text-center p-2">
          <div>
            <br>
            <img class="m-0 p-0 mt-1" src="{{ asset('assets/login/logo.png') }}" width="" height="150" >
            <br><br><br>
         
          </div>
         
        </div>
   
      </div>


    </div>
  </div>
</div>
</div>
  
@endsection

@section('javascript')


@endsection