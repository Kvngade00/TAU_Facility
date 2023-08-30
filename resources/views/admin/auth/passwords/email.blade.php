@extends('admin.layout.auth')

<!-- Main Content -->
@section('content')
<div class="bg-primary bg-soft">
    <div class="row">
        <div class="col-7">
            <div class="text-primary p-4">
                <h5 class="text-primary">Welcome Back !</h5>
                <p>Reset Admin Password</p>
            </div>
        </div>
        <div class="col-5 align-self-end">
            <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
<div class="card-body pt-0"> 
    <div>
        <a href="index.html">
            <div class="avatar-md profile-user-wid mb-4">
                <span class="avatar-title rounded-circle bg-light">
                    <img src="{{asset('assets/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                </span>
            </div>
        </a>
    </div>
    
    <div class="p-2">
        <div class="alert alert-success text-center mb-4" role="alert">
            Enter your Email and instructions will be sent to you!
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/password/email') }}">
            @csrf

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                <label for="email" class="form-label">E-mail Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter e-mail"  name="email" value="{{ old('email') }}" autofocus>

                @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
                @endif
            </div>

            <div class="mt-3 d-grid">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Send Password Reset Link</button>
            </div>

        </form>
    </div>

</div>
</div>
<div class="mt-5 text-center">
<p>Remember It ? <a href="{{ url('/admin/login') }}" class="fw-medium text-primary"> Sign In here</a> </p>
</div>
@endsection
