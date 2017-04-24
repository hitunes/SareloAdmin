@extends('layouts.dashboard')
    @section('title')
        Dashboard | Dashoard
    @endsection
    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
               
                @include('layouts.dashboard_sidebar')
                
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row widget-row">
                         @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('delete_message'))
                                <div class="alert alert-danger">
                                    {{ session('delete_message') }}
                                </div>
                                @elseif(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    @foreach($errors->all() as $error)
                                        <strong>Error Upon Submission...</strong> {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                        <div class="col-md-4">

                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Total Expense</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red icon-layers"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">NGN</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$ordersResult}}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-4">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">All Users</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle"><i class="fa fa-user"></i></span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$users}}">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading">Total Products</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle"></span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="{{$products}}">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                          <div class="col-md-12">

                            <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase"> Order Listing </span>
                                    </div>
                                    <div class="actions">
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <div class="table-actions-wrapper">
                                            <span> </span>
                                        </div>
                                        {{ $orders->links() }}
                                        <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_orders">
                                            <thead>
                                                <tr role="row" class="heading">
                                                    <th width="10%"> Order&nbsp;# </th>
                                                    <th width="15%"> Order Date</th>
                                                    <th width="10%"> Price </th>
                                                    <th width="15%"> Payment Method</th>
                                                    <th width="15%"> Phone</th>
                                                    <th width="15%"> Update Status </th>
                                                    <th width="15%"> Current Status </th>
                                                    <th width="5%"> Details </th>
                                                </tr>
                                            
                                            </thead>
                                            <tbody>
                                                <?php $num = 1; ?>
                                                <form method="POST" action="/update_orders">
                                                    @foreach($orders as $order)

                                                            <tr>

                                                                <td>
                                                                   {{$num++}}
                                                                </td>
                                                                <td>
                                                                    @if(isset($order->created_at))
                                                                    {{$order->created_at->diffForHumans()}}
                                                                    @endif
                                                                </td>
                                                                <td> {{$order->total}} </td>
                                                                <td> {{$order->payment_method}} </td>
                                                                <td> {{$order->receiver_phone}} </td>
                                                                <td>

                                                                    <select name="order_status" class="form-control form-filter input-sm">
                                                                        <option value="">Select...</option>
                                                                       {{--  @foreach($order->total as $present_status)
                                                                            <option value="{{$present_status}}">{{$present_status}}</option>
                                                                        @endforeach --}}
                                                                    </select>
                                                                </td>
                                                                <td>

                                                                        <span class="label label-sm lgreen label-success"> {{$order->status}} </span>

                                                                </td>
                                                            </form>
                                                                <td>
                                                                    <a href="{{url('admin/orders',$order->id)}}"><button class="btn btn-sm btn-success margin-bottom">
                                                                            <i class="fa fa-eye"></i> View</button></a>
                                                                </td>

                                                            </tr>
                                                    @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $orders->links() }}
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
            <!-- END CONTENT -->

            <!-- BEGIN QUICK SIDEBAR -->
            
            <!-- END QUICK SIDEBAR -->

        </div>
        <!-- END CONTAINER -->
@endsection
