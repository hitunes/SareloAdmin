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
    
        <div class="wrapper clearfix">
            <header class="m-b-30">
                <!-- ===Nav bar starts here == -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid dis-flex">
                        <div class="navbar-header">
                            <a class="navbar-brand navbar-link" href="/">
                                <img src="/assets/img/logo/sarelo3.svg">
                            </a>
                        </div>
                        
                    </div>
                </nav>
                <!-- ===Nav bar endss here == -->
                <!-- Progress -->
                <!--wizard here-->
                <div class="progressContainer dis-flex">
                    <div class="wizard">
                        <div class="wizard-inner">
                            
                            <ul class="nav nav-tabs">

                                <li role="presentation"  class="active">
                                    <a href="#">
                                        <span class="round-tab">
                                            <span class="badge bg-brand-green">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            Address
                                        </span>
                                    </a>
                                </li>

                                <li role="presentation" class="active">
                                    <a href="#">
                                        <span class="round-tab">
                                            <span class="badge bg-brand-green">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            Delivery Slot
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation"  class="active">
                                    <a href="#">
                                        <span class="round-tab">
                                            <span class="badge bg-transparent">
                                                <i class="fa fa-check"></i>
                                            </span>
                                             Confirmation
                                        </span>
                                    </a>
                                </li>

                                <li role="presentation"  class="active">
                                    <a href="#">
                                        <span class="round-tab">
                                            <span class="badge bg-brand-green">4</span>
                                            Payment
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
               </div>
                <!-- wizard ended -->
               <!-- Progress -->
            </header>
            <section>
                <div class="container width-94p">
                   <div class="row">
                       <div class="col-md-8">
                           <div class="card">
                                <div class="header">
                                    <h4 class="title">
                                        <i class="fa fa-shopping-basket c-brand-green f-27"></i> Confirm Your Order
                                    </h4>
                                </div>
                                <div class="content clearfix p-b-0">
                                    <!--starts here -->
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-t-14 no-bd">Delivers to</td>
                                                        <td class="p-t-14 no-bd"><span class="location">294 Herbert Macaulay str.</span></td>
                                                        <td class="no-bd text-right"><button class="btn bg-transparent no-bd change">Change</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-t-14">Delivery Slot</td>
                                                        <td class="p-t-14"><span class="location">Fri, Mar 24, 7pm - 8pm</span></td>
                                                        <td class="text-right"><button class="btn bg-transparent no-bd change">Change</button></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- starts here end -->
                                </div>
                                <div class="content p-b-0">
                                    <div class="p-b-10">
                                        <h4 class="title">
                                            Review
                                        </h4>
                                    </div>
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table table-hover border-bottom m-0">
                                                <tbody>
                                                @foreach($order as $item)
                                                    <tr class="no-bd p-t-14 width-33_3p">
                                                        <td class="no-bd">
                                                            <div class="clearfix">
                                                                <div class="f-left p-r-15">
                                                                    <img src="/assets/img/cucumber.jpg" class="width-40 h-40 bd-50p">
                                                                </div>
                                                                <div class="f-left">
                                                                    <div>{{$item->name}}</div>
                                                                    <div class="f-12 opacity-50">{{$item->options->unit}}</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="width-33_3p no-bd">
                                                            <div class="counter">
                                                                <div data-cart-item-id="{{$item->rowId}}" class="minus">-</div>
                                                                <div class="count">{{$item->qty}}</div>
                                                                <div data-cart-item-id="{{$item->rowId}}" class="plus">+</div>
                                                            </div>
                                                        </td>
                                                        <td class="p-t-14 width-33_3p text-right no-bd">
                                                            <div class="w-600 p-r-12">
                                                                &#8358; <span class="cash">{{$item->price}}</span>
                                                            </div>
                                                            <button class="btn bg-transparent-black opacity-50 f-12">REMOVE</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="btn btn-block bg-transparent-black text-center p-b-15 p-t-15">See more...</button>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="card">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p class="p-0">Done?</p>
                                                    <p>Place your order and enjoy the rest of your day.</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-md bg-brand-green f-18 f-right">Place order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                            <p class="text-center">*Terms and conditions apply on free delivery. <a href="#" class="c-brand-purple">Learn more</a></p>
                           
                       </div>
                       <div class="col-md-4">
                           @include('checkout.billing-summary')
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
        <script src="/assets/js/main.js"></script>
         <script>
            app.inlineEditor();
            app.cartCtrl();
         </script>
    </body>
</html>