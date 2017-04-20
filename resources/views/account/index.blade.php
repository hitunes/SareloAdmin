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
                <li role="presentation" class="dropdown c-brand-green w-500 f-20 p-t-20 p-r-50">
                    <span>Account </span><span><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="p-r-5 p-l-5 pos-rel acc_basket_btn">
                    <button class="btn btn_cart btn_action f-18 w-500 cart_toggle bd-4">
                        <i class="fa fa-shopping-basket m-r-5"></i>
                        <!--<img src="assets/img/icon/Sarelo-basket.png" width="27px">-->My Basket
                    </button>
                    <span class="badge bg-red pos-abs t-10 l-0 items">0</span>
                </li>
            </ul>
        </aside>
        <!--left side bar for mobile ends here-->

        <!-- main contents begins here-->
        <div class="wrapper clearfix">
            <header class="pos-fx border-bottom">
                <!-- ===Nav bar starts here == -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle menu_toggle">
                                <span class="fa fa-bars"></span>
                            </button>

                            <a class="navbar-brand navbar-link hidden-xs" href="/">
                                <img src="../assets/img/logo/sarelo3.svg">
                            </a>
                            <button class="navbar-toggle cart_toggle pos-rel bd-4">
                                <i class="fa fa-shopping-basket"></i>
                                 <span class="badge bg-red pos-abs t-0 r-0 items">0</span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li role="presentation" class="dropdown c-brand-green w-500 f-20 p-t-20 p-r-50">
                                    <span>Account </span><span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                                <li class="p-r-5 p-l-5 pos-rel acc_basket_btn">
                                    <button class="btn btn_cart btn_action f-18 w-500 cart_toggle bd-4">
                                        <i class="fa fa-shopping-basket m-r-5"></i>
                                        <!--<img src="assets/img/icon/Sarelo-basket.png" width="27px">-->  My Basket
                                    </button>
                                    <span class="badge bg-red pos-abs t-10 l-0 items">0</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- ===Nav bar ends here == -->
            </header>
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <main>
                <!-- BEGIN CONTAINER -->
                <div class="page-container m-t-75">
                    <!-- BEGIN SIDEBAR -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                {{-- <div class="alert alert-success alert-dismissable text-center bg-brand-green-op c-dark bd-6 ">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <h4 class="p-10 m-0">Refer Your Friends and get 50% off your next order!</h4>
                                </div> --}}
                                <div class="page-sidebar-wrapper">
                                    <!-- BEGIN SIDEBAR -->
                                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                                    <div class="page-sidebar navbar-collapse collapse">
                                            @include('account.sidebar')
                                        <!-- END SIDEBAR MENU -->
                                    </div>
                                    <!-- END SIDEBAR -->
                                </div>
                                <!-- END SIDEBAR -->
                                <!-- BEGIN CONTENT -->
                                <div class="page-content-wrapper">
                                    <!-- BEGIN CONTENT BODY -->
                                    <div class="page-content p-t-0 p-l-40">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="m-t-0 w-400">Order Status: <span class="c-brand-green">Processing</span></h2>
                                                <div>
                                                    <hr class="bd-top-gray">
                                                </div>
                                                @foreach($pending_orders as $order)
                                                <div class="card">
                                                    <div class="header">
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd opacity-50">Order #{{$order->order_unique_reference}}</td>
                                                                        
                                                                        <td class="no-bd text-right @if($order->payment_status =="success") c-brand-green @else c-brand-red @endif" > @if($order->payment_status =="success") Paid @else Not Paid @endif</td>
                                    
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd">{{$order->user_address->address}}</td>
                                                                        <td class="text-right no-bd"><button class="btn bg-transparent no-bd c-blue m-r-0 p-r-0">Cancel Order</button></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="content p-t-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-0 tables">
                                                                <tbody>
                                                                @foreach($order->order_products as $order_product)
                                                                    <tr>
                                                                        <td class="">
                                                                            <div class="clearfix">
                                                                                <div class="f-left p-r-15">
                                                                                    <img src="{{$order_product->product->name}}" class="width-40 h-40 bd-50p">
                                                                                </div>
                                                                                <div class="f-left">
                                                                                    <div>{{$order_product->product->name}}</div>
                                                                                    <div class="f-12 opacity-50">
                                                                                    @if(isset($order_product->product->unit_type->name))
                                                                                        {{$order_product->product->unit_type->name}}
                                                                                    @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="width-33_3p text-center">
                                                                            <div class="">{{$order_product->qty}}</div>
                                                                        </td>
                                                                        <td class="width-33_3p text-right">
                                                                            <div class="w-600">
                                                                                &#8358; <span class="cash">{{number_format($order_product->product->price, 2)}}</span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd">{{-- Fri, March 24 --}} {{date('l, M d ', strtotime($order->created_at))}}</td>
                                                                        <td class="text-right no-bd">
                                                                            <button class="btn bg-transparent-black opacity-50 no-bd m-r-0 p-r-0 mores">Hide Full Reciept</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-12">
                                                <h2 class="m-t-0 w-400">Completed Orders</h2>
                                                <div>
                                                    <hr class="bd-top-gray">
                                                </div>
                                              

                                                 @foreach($completed_orders as $order)
                                                <div class="card">
                                                    <div class="header">
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd opacity-50">Order #{{$order->order_unique_reference}}</td>
                                                                        
                                                                        <td class="no-bd text-right @if($order->payment_status =="success") c-brand-green @else c-brand-red @endif" > @if($order->payment_status =="success") Paid @else Not Paid @endif</td>
                                    
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd">{{$order->user_address->address}}</td>
                                                                        <td class="text-right no-bd"><button class="btn bg-transparent no-bd c-blue m-r-0 p-r-0">Cancel Order</button></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="content p-t-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-0 tables">
                                                                <tbody>
                                                                @foreach($order->order_products as $order_product)
                                                                    <tr>
                                                                        <td class="">
                                                                            <div class="clearfix">
                                                                                <div class="f-left p-r-15">
                                                                                    <img src="{{$order_product->product->name}}" class="width-40 h-40 bd-50p">
                                                                                </div>
                                                                                <div class="f-left">
                                                                                    <div>{{$order_product->product->name}}</div>
                                                                                    <div class="f-12 opacity-50">
                                                                                    @if(isset($order_product->product->unit_type->name))
                                                                                        {{$order_product->product->unit_type->name}}
                                                                                    @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="width-33_3p text-center">
                                                                            <div class="">{{$order_product->qty}}</div>
                                                                        </td>
                                                                        <td class="width-33_3p text-right">
                                                                            <div class="w-600">
                                                                                &#8358; <span class="cash">{{number_format($order_product->product->price, 2)}}</span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach 
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-t-14 no-bd">{{-- Fri, March 24 --}} {{date('l, M d ', strtotime($order->created_at))}}</td>
                                                                        <td class="text-right no-bd">
                                                                            <button class="btn bg-transparent-black opacity-50 no-bd m-r-0 p-r-0 mores">Hide Full Reciept</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- END PAGE BASE CONTENT -->
                                    </div>
                                    <!-- END CONTENT BODY -->
                                </div>
                                <!-- END CONTENT -->
                            </div>
                            <aside class="col-md-4 col-hidden-sm"></aside>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER -->
            </main>
        </div>
        <!-- main contents ends here -->

        <!--sidebar menu on the right hand -->
        <aside class="sidebar right_sidebar" id="right_sidebar">
        
        </aside>

        <!--overlay to call -->
        <!-- <div id="overlay">
        </div> -->

        <!-- jQuery -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- Main JS -->
        <script src="/assets/js/main.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script>
             $(document).ready(function(){
                 app.toggleCollapse();   
                 app.cartCtrl();

             });
         </script>
    </body>
</html>