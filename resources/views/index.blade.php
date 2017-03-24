<!DOCTYPE html>
<html class="sidebar-lg">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<style>
   
.loading {
  position: absolute;
  top: 25px;
  right: 10px;
  position: absolute;
  display: none;
}
.loading-bar {
  display: inline-block;
  width: 4px;
  height: 18px;
  border-radius: 4px;
  animation: loading 1s ease-in-out infinite;
}
.loading-bar:nth-child(1) {
  background-color: #3498db;
  animation-delay: 0;
}
.loading-bar:nth-child(2) {
  background-color: #c0392b;
  animation-delay: 0.09s;
}
.loading-bar:nth-child(3) {
  background-color: #f1c40f;
  animation-delay: .18s;
}
.loading-bar:nth-child(4) {
  background-color: #27ae60;
  animation-delay: .27s;
}

@keyframes loading {
  0% {
    transform: scale(1);
  }
  20% {
    transform: scale(1, 2.2);
  }
  40% {
    transform: scale(1);
  }
}
</style>

<body class="clearfix homePage">
    <div class="main clearfix">
        <div class="overlay">
            <!-- ===Nav bar starts here == -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="index.html">
                            <img src="assets/img/logo/sarelo2.svg">
                        </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li role="presentation">
                                <span>Already Have an account</span><br>
                                <a href="signin" class="c-brand-purple"><span> Sign In</span></a>
                            </li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li role="presentation">
                                <span>No Account?</span><br>
                                <a href="signup">
                                    <span>Sign Up</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ===Nav bar endss here == -->

            <!-- ===Main contents begins here ==-->
            <div class="container-fluid">
                <div class="contents m-auto m-t-80 m-b-100 width-80p">
                    <h1 class="text-left l-spacing-2 fw-900 line-40">We will buy & deliver <span class="c-brand-green">fresh foodstuff!</span> from the market to you.</h1>
                    <br><br><br>
                    <form class="query pos-rel">
                        <input class="form-control search p-r-20 p-l-20" type="search" placeholder="What do you want to buy?...." id="querySelector">
                        <div class="loading">
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                        </div>
                        <div class="update"> 
                     
                        </div>
                    </form>
                </div>
                <!--<button class="btn btn-default btn-sm btn-cart" type="button"><i class="fa fa-shopping-cart"></i> Cart</button>-->
            </div>
            <!-- ===Main contents ends here ==-->

       
          
        </div>
    </div>
    <!-- BEGIN RIGHT MENU -->
    <nav id="menu-right" class="r-0 border-left">
        <div class="header">
            <h3>MY FOOD BASKET 
                <span class="pull-right items_container">
                <span id="items">0</span>
                <span class="t-u-c">items</span>
                </span>
            </h3>
        </div>
        <div class="full_bag">
            <div class="body" id="basket">
                <ul class="p-l-0 list-type-none" id="basketList">
           
                </ul>
            </div>
            <div class="footer">
                <ul class="p-l-0">
                    <li>
                        <p class="menus">
                            <span>
                                TOTAL
                            </span>
                            <span class="pull-right">&#8358; <span id="totalP"></span></span>
                        </p>
                    </li>
                    <li>
                        <p class="menus">
                            <span>
                                10% Service Charge
                            </span>
                            <span class="pull-right">&#8358; <span id="serviceCharge"></span></span>
                        </p>
                        <small>Cost for service & packaging</small>
                    </li>
                    <li>
                        <p class="menus">
                            <span>
                                Delivery Fee
                            </span>
                            <span class="pull-right">&#8358; <span id="deliveryFee"></span></span>
                        </p>
                        <small>Cost for delivering your product</small>
                    </li>
                    <li>
                        <p class="menus fw-700">
                            <span>
                                TOTAL
                            </span>
                            <span class="pull-right">&#8358; <span id="grandTP"></span></span>
                        </p>
                    </li>
                    <li>
                        <a href="/checkout/billing-address" class="btn btn-success btn-block btn-cart btn-larger">Proceed To Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="empty_bag dis-flex">
            <div class="wrap text-center">
                <span class="fa fa-shopping-basket m-b-50" style="font-size: 150px;"></span>
                <!--<img src="assets/img/icon/Sarelo-basket.png" class="width-200">-->
                
                <h4 class="m-b-50 l-spacing-2">Your food basket is empty</h4>
            
                <h4 class="l-spacing-2">Use the search bar to ﬁnd<br> and add items to your basket</h4>
            </div>
        </div>
    </nav>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        
        $(document).ready(function(){
           // app.dataFetcher();
           app.fecther();
           app.cartCtrl();
        

           /* $('.loading').bind('ajaxStart', function(){
                $(this).show();
            }).bind('ajaxStop', function(){
                $(this).hide();
            });*/
            
        });
    </script>
</body>

</html>