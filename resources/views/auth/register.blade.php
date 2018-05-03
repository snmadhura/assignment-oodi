<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0">
        <title>Flocksend</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row padding-top-60">
                <div class="col text-center">
                    <img src="images/flock.png" alt="FLOCKSEND" width='325' class="img-responsive"/>
                </div>
            </div>
            <div class="row align-items-center height-350">
                <div class="col text-center ">
                    <p class="font-weight-bold">Register</p>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control col-md-4 mx-auto" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control col-md-4 mx-auto" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control col-md-4 mx-auto" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                        </div>
                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control col-md-4 mx-auto" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-info btn-md">
                                    Register
                                </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    Alredy Registered? <a href="/login" class="text-primary">Login</a>
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/datatables.min.js')}}"></script>
    </body>
</html>
