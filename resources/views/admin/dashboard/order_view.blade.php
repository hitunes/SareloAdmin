@extends('layouts.dashboard')
    @section('title')
        Dashboard | View Order
    @endsection

    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu">
                       <li class="nav-item ">
                            <a href="{{url('/admin/dashboard')}}" class="nav-link ">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item active open">
                            <a href="{{url('/admin/orders')}}" class="nav-link ">
                                <i class="icon-basket"></i>
                                <span class="title">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/products')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Products</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/unit-types')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Unit Types</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/slots')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Slots</span>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{url('/admin/create')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Manage Admin</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->

                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->

                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase"> Order {{$order->user_id}}
                                            <span class="hidden-xs">| Dec 27, 2013 7:16:25 </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs nav-tabs-lg">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab"> Details </a> 
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="portlet yellow-crusta box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Order Details </div>
                                                                <!--<div class="actions">
                                                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </div>-->
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order No: </div>
                                                                    <div class="col-md-7 value"> {{$order->order_unique_reference}}
                                                                        <!--<span class="label label-info label-sm"> Email confirmation was sent </span>-->
                                                                    </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order Date& Time: </div>
                                                                    <div class="col-md-7 value">
                                                                    @if(isset($order->created_at))
                                                                    {{$order->created_at->diffForHumans()}} @endif
                                                                    </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Order Status: </div>
                                                                    <div class="col-md-7 value">
                                                                        @if(strtolower($order->status) == 'delivered')

                                                                            <span id="{{$order->id}}" class="label label-sm" style="color:#222; background-color:#5cb85c;"> {{$order->status}} </span>

                                                                        @elseif(strtolower($order->status) == 'processing')
                                                                             
                                                                             <span id="{{$order->id}}" class="label label-sm" style="color:#222; background-color: orange;"> {{$order->status}} </span>

                                                                        @elseif(strtolower($order->status) == 'confirmed')
                                                                            
                                                                            <span id="{{$order->id}}" class="label label-sm" style="color:#222; background-color: #22b9b7;"> {{$order->status}} </span>
                                                                        @elseif(strtolower($order->status) == 'gone to market')
                                                                            
                                                                            <span id="{{$order->id}}" class="label label-sm" style="color:white; background-color: #b92296;"> {{$order->status}} </span>
                                                                        @endif 
                                                                        <select class="updateStatus" name="order_status" class="form-control" data-payload="{{$order->id}}">
                                                                        <option value="">Change</option>
                                                                        <option value="Confirmed">Confirmed</option>
                                                                        <option value="Processing">Processing</option>
                                                                        <option value="Gone to Market">Gone to Market</option>
                                                                        <option value="Delivered">Delivered</option>
                                                                    </select>
                                                                </div>
                                                                     
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Grand Total: </div>
                                                                    <div class="col-md-7 value"> &#8358; {{$order->total}} </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Delivery Instruction: </div>
                                                                    <div class="col-md-7 value"> {{$order->delivery_instruction}} </div>
                                                                </div>
                                                                 <div class="row static-info">
                                                                    <div class="col-md-5 name"> Payment Status: </div>
                                                                    <div class="col-md-7 value">

                                                                     @if(strtolower($order->payment_status) == 'pending')

                                                                       <span id="payment{{$order->id}}" class="label payment label-sm label-warning" data-payload="{{$order->id}}" style="color:white; "> {{$order->payment_status}} </span>

                                                                    @elseif(strtolower($order->payment_status) == 'successful')
                                                                         <span id="payment{{$order->id}}" class="label payment label-sm" data-payload="{{$order->id}}" style="color:#222; background-color:#1ebea5;"> {{$order->payment_status}} </span>
                                                                    @elseif(strtolower($order->payment_status) == 'cancel')
                                                                         <span id="payment{{$order->id}}" class="label payment label-danger label-sm" data-payload="{{$order->id}}" => {{$order->payment_status}} </span>
                                                                    @endif     
                                                                       <select class="paymentStatus" name="paymentStatus" class="form-control form-filter input-sm" data-payload="{{$order->id}}">
                                                                        <option value="">Select...</option>
                                                                        <option value="Pending">Pending</option>
                                                                        <option value="Cancel">Cancel</option>
                                                                        <option value="Successfull">Successfull</option>
                                                                    </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="portlet blue-hoki box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Customer Information </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="row static-info">

                                                                    <div class="col-md-5 name"> Customer Name: </div>
                                                                    <div class="col-md-7 value"> {{$order->user->first_name}} </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Email: </div>
                                                                    <div class="col-md-7 value"> {{$order->user->email}} </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Address: </div>
                                                                    <div class="col-md-7 value"> {{$order->user_address->address}} {{$order->user_address->city}}  </div>
                                                                </div>
                                                                <div class="row static-info">
                                                                    <div class="col-md-5 name"> Phone Number: </div>
                                                                    <div class="col-md-7 value"> {{$order->user->phone}} </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="portlet grey-cascade box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-cogs"></i>Shopping Cart </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover table-bordered table-striped">
                                                                        <thead>

                                                                                <tr>
                                                                                    <th> Product Name</th>
                                                                                    <th> Quantity </th>
                                                                                    <th> Price (per each item) </th>
                                                                                    <th> Total </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach($order->order_products as $item)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <a target="_blank" href="/admin/products/{{$item->product->id}}">
                                                                                            {{$item->product->name}}
                                                                                            </a>
                                                                                        </td>
                                                                                        <td> {{$item->qty}} </td>
                                                                                        <td>&#8358;  {{$item->price}}</td>
                                                                                        <td>&#8358; {{$item->sub_total}} </td>
                                                                                    </tr>

                                                                                @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: life time stats -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
@endsection
