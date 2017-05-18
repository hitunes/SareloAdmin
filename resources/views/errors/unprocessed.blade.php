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
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>
    <body>

        <!--sidebar menu on the right hand -->
        <aside class="sidebar left_sidebar visible-xs" id="left_sidebar">
            <ul class="nav navbar-nav navbar-right">
                @if(isset(\Auth::user()->first_name))
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle c-brand-green w-500 f-20 p-t-10" data-toggle="dropdown" href="#">
                                        <span>Account </span>
                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Hi {{\Auth::user()->first_name}}</a></li>
                                        <li><a href="/my-account">Your Account</a></li>
                                        <li><a href="/my-orders">Your Order</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
            </ul>
        </aside>
        <!--left side bar for mobile ends here-->

        <!-- main contents begins here-->
        <div class="wrapper clearfix bg-white-plain">
            <header class="pos-fx border-bottom">
                <!-- ===Nav bar starts here == -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle menu_toggle">
                                <span class="fa fa-bars"></span>
                            </button>
                            <a class="navbar-brand navbar-link hidden-xs" href="/">
                                <img src="/assets/img/logo/sarelo3.svg">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav navbar-right">
                                 @if(isset(\Auth::user()->first_name))
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle c-brand-green w-500 f-20 p-t-10" data-toggle="dropdown" href="#">
                                        <span>Account </span>
                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Hi {{\Auth::user()->first_name}}</a></li>
                                        <li><a href="/my-account">Your Account</a></li>
                                        <li><a href="/my-orders">Your Order</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- ===Nav bar ends here == -->
            </header>
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"></div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <main class="">
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN SIDEBAR -->
                    <div class="container m-t-75">

                           <h1 class="text-center" style="">{{message}}</h1>
                           <p style="padding-bottom: 30px" class="text-center"><a href="/">Home</a></p>

                    <!-- END CONTENT -->
                    </div>


                </div>
                <!-- END CONTAINER -->
            </main>
        </div>
        <!-- main contents ends here -->

        <!-- jQuery -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- Main JS -->
        <script src="/assets/js/main.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script>
             $(document).ready(function(){

             });
         </script>
    </body>
</html>