<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sarelo</title>
        <!--my icons here -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
        <!-- Main CSS here -->
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper clearfix login-bg">
            <section>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li role="presentation">
                                    <a href="/signup">
                                        <button class="btn btn-md bg-transparent-white">How Sarelo Works</button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container">
                   <div class="row">
                       <div class="col-md-6 col-md-offset-3">
                           <div class="card bg-opacity-white-80">
                                <div class="logo text-center p-t-20">
                                    <a href="/">
                                       <img src="/assets/img/logo/sarelo3.svg">
                                    </a>
                                </div>
                                <div class="content p-t-0">
                                    <div class="">
                                        <div class="p-50 p-t-10 p-b-10 text-center">
                                            <h4>Reset password</h4>

                                            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                                                {{ csrf_field() }}

                                                <input type="hidden" name="token" value="{{ $token }}">

                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Password</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-md btn-block bg-brand-green">
                                                            Reset Password
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="or-separator m-b-10">or</div>
                                            <a href="/social/login/facebook" class="btn btn-md btn-block bg-facebook m-b-10"><span class="p-r-30"><i class="fa fa-facebook-square"></i></span> Log in with Facebook</a>
                                            <a href="/social/login/google" class="btn btn-md btn-block bg-twitter m-b-10"><span class="p-r-30"><i class="fa fa-google-plus-square"></i></span> Log in with Google</a>
                                            <div class="p-t-30">
                                                <p class="text-center">Don't have an account? <a href="/signup" class="c-brand-purple">Sign Up</a></p>
                                                <p class="text-center">Signed up already? <a href="/login" class="c-brand-purple">Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </section>
        </div>


        <!-- jQuery -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script>

         </script>
    </body>
</html>