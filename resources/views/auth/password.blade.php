@extends('app')

@section('content')
    <body class="login tooltips container-fluid">
    <div class="login-header text-center container-fluid">
        <img src="https://omnepresent.com/wp-content/uploads/2014/12/Omnepresent-Logo-1212.svg" class="logo" alt="Logo">
    </div>
    <div class="login-wrapper">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

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
                            <div class="login-wrapper">
                                <div class="alert alert-warning alert-bold-border fade in alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    Enter your email address to recover your password.
                                </div>
                        <form  role="form" method="POST" action="{{ url('/password/email') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group has-feedback lg left-feedback no-label">
                                <input type="email" class="form-control no-border input-lg rounded" placeholder="Enter email" name="email" value="{{ old('email') }}" autofocus>
                                <span class="fa fa-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">RESET PASSWORD</button>
                            </div>
                        </form>
                    </div>
    </div>
@endsection