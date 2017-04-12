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
                                       <img src="/assets/img/logo/sarelo2.svg">
                                    </a>
                                </div>
                                <div class="content p-t-0">
                                    <div class="">
                                        <div class="p-50 p-t-10 p-b-10 text-center">
                                            <h4>Welcome Back</h4>
                                            <p>Log in with your email address and password</p>
                                            <form action="{{route('login')}}" method="post" class="forms m-b-10">
                                                {{ csrf_field() }}
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input type="email" name="email" placeholder="email@example.com" class="form-control" value="{{ old('email') }}" required autofocus/>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>                                              
                                                <button type="submit" class="btn btn-md btn-block bg-brand-green">Log In</button>
                                            </form>
                                            <div class="or-separator m-b-10">or</div>
                                            <a href="/social/login/facebook" class="btn btn-md btn-block bg-facebook m-b-10"><span class="p-r-30"><i class="fa fa-facebook-square"></i></span> Log in with Facebook</a>
                                            <a href="/social/login/google" class="btn btn-md btn-block bg-twitter m-b-10"><span class="p-r-30"><i class="fa fa-google-plus-square"></i></span> Log in with Google</a>
                                            <div class="p-t-30">
                                                <p class="text-center">Don't have an account? <a href="/signup" class="c-brand-purple">Sign Up</a></p>
                                                <p class="text-center">Forgot your password? <a href="/password/reset" class="c-brand-purple">Reset It</a></p>
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
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script>
             
         </script>
    </body>
</html>