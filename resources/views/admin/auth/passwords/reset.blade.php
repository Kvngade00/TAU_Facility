@extends('admin.layout.auth')

@section('content')
<div class="card overflow-hidden">
    <div class="bg-primary bg-soft">
        <div class="row">
            <div class="col-7">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Welcome Back !</h5>
                    <p>Setup New Password</p>
                </div>
            </div>
            <div class="col-5 align-self-end">
                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0"> 
        <div class="auth-logo">
            <a href="index.html" class="auth-logo-light">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>

            <a href="index.html" class="auth-logo-dark">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>
        </div>
        <div class="p-2">
            <form class="form-horizontal"  role="form" method="POST" action="{{ url('/admin/password/reset') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                    <label for="email" class="form-label">E-Mail Address</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter e-mail" name="email" value="{{ $email or old('email') }}" autofocus>

                    @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-3">
                    <label class="form-label" for="password-input">Password</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="password-input">
                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                    </div>

                    @if ($errors->has('password'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} mb-3">
                    <label class="form-label" for="password-input">Confirm Password</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input type="password" class="form-control password-input"  name="password_confirmation" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="password-input">
                    </div>

                    @if ($errors->has('password_confirmation'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </div>
                    @endif
                </div>
                
                <div class="mt-3 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Save Password Changes</button>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection
