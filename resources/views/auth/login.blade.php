@extends('app')

@section('lol')
    <body class="login tooltips container-fluid">

	<!--===========================================================
		BEGIN PAGE
		===========================================================
		-->
    <div class="login-header text-center container-fluid">
        <img src="https://omnepresent.com/wp-content/uploads/2014/12/Omnepresent-Logo-1212.svg" class="logo" alt="Logo">
    </div>
    <div class="login-wrapper">
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form role="form" method="POST"  action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback lg left-feedback no-label">
                <input type="email" class="form-control no-border input-lg rounded" placeholder="Enter Your Email" value="{{ old('email') }}" name="email" autofocus>
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback lg left-feedback no-label">
                <input type="password" class="form-control no-border input-lg rounded" placeholder="Enter password" name="password">
                <span class="fa fa-unlock-alt form-control-feedback"></span>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="i-yellow-flat" name="remember"> Remember me
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">LOGIN</button>
            </div>
        </form>
        <p class="text-center"><strong><a href="{{ url('/password/email') }}">Forgot your password?</a></strong></p>
        <p class="text-center">or</p>
        <p class="text-center"><strong><a href="{{ url('/auth/register') }}">Create a new account</a></strong></p>
    </div>
@endsection
