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
                    <p class="font-weight-bold">Fly-In to your account</p>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" id="email" class="form-control col-md-4 mx-auto" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" id="password" class="form-control col-md-4 mx-auto" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-info btn-md">Sign In</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    Don't have an account yet? <a href="/register" class="text-primary">Sign Up</a>
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/datatables.min.js')}}"></script>
    </body>
</html>
