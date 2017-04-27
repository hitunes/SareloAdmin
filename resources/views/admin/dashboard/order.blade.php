@extends('layouts.dashboard')
    @section('title')
        Dashboard | Orders
    @endsection
    @section('content')
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu">
                            <li class="nav-item  ">
                                <a href="{{url('/admin')}}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item  active open">
                                <a href="{{url('/admin/orders')}}" class="nav-link ">
                                    <i class="icon-basket"></i>
                                    <span class="title">Orders</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{url('/admin/products')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Products</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{url('/admin/slots')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Slots</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{url('/admin/unit-types')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Unit Types</span>
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
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
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
                            <div class="col-md-8">
                                <div id="getStatus">
                                    
                                </div>
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
                                                    <th width="15%"> Update Payment</th>
                                                    <th width="15%"> Payment Satus</th>
                                                    <th width="15%"> Phone</th>
                                                    <th width="15%"> Update Status </th>
                                                    <th width="15%"> Current Status </th>
                                                    <th width="5%"> Details </th>
                                                </tr>
                                            
                                            </thead>
                                            <tbody>
                                                <?php $num = 1; ?>
                                                <form method="POST" action="">
                                                    @foreach($orders as $order)

                                                            <tr>

                                                                <td>
                                                                   {{$num++}}
                                                                </td>
                                                                <td>
                                                                    @if(isset($order->created_at))
                                                                    {{$order->created_at}}
                                                                    @endif
                                                                </td>
                                                                <td> {{$order->total}} </td>
                                                                <td> {{$order->payment_method}} </td>
                                                                 <td>
                                                                      <select name="order_status" class="form-control form-filter input-sm">
                                                                        <option value="">Select...</option>
                                                                        <option value="Confirmed">Confirmed</option>
                                                                        <option value="Processing">Processing</option>
                                                                        <option value="Gone to Market">Gone to Market</option>
                                                                        <option value="Delivered">Delivered</option>
                                                                    </select>
                                                                 </td>
                                                                <td> {{$order->payment_status}} </td>

                                                                <td> {{$order->receiver_phone}} </td>
                                                                <td>

                                                                    <select id="updateStatus" name="order_status" class="form-control" data-payload="{{$order->id}}">
                                                                        <option value="">Select...</option>
                                                                        <option value="Confirmed">Confirmed</option>
                                                                        <option value="Processing">Processing</option>
                                                                        <option value="Gone to Market">Gone to Market</option>
                                                                        <option value="Delivered">Delivered</option>
                                                                    </select>
                                                                </td>
                                                                <td>

                                                                        <span id="current_status" class="label label-sm lgreen label-success"> {{$order->status}} </span>

                                                                </td>
                                                            </form>
                                                                <td>
                                                                    <a href="{{url('admin/orders',$order->id)}}"><button class="btn btn-sm btn-success margin-bottom">
                                                                            <i class="fa fa-eye"></i> View</button></a> </br> </br>
                                                                    <a id="a_del1" href="{{url('admin/orders/delete',$order->id)}}"><button class="btn btn-sm btn-danger margin-bottom">
                                                                            <i class="icon-remove-sign"></i> Cancel</button></a>
                                                                </td>

                                                            </tr>
                                                    @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $orders->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/jquery.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $('#updateStatus').change(function()
            {
                var status = $(this).find('option:selected').val();
                console.log(status);
                switch (status) {
                    case "Delivered":
                        $("#current_status").css('background-color', '#5cb85c').css('color','white');
                        $("#current_status").addClass('glyphicon');
                        $("#current_status").html('Delivered');
                        break;
                    case "Processing":
                        $("#current_status").css('background-color', 'orange');
                        $("#current_status").html('Processing');
                        break;
                    case "Confirmed":
                        $("#current_status").css('background-color', '#22b9b7');
                        $("#current_status").html('Confirmed');
                        break;
                    case "Gone to Market":
                        $("#current_status").css('background-color', '#b92296').css('color', '#ffffff');
                        $("#current_status").html('Gone to Market');
                    default:
                        break;
            }
                var id = $(this).data("payload");
                $.get('update_status/'+id, function(data){
                    alert(data);

                    $("#current_status").html(data);
                    // $.ajax({
                    //     url: "/update_status/"+id,
                    //     type: "POST",
                    //     data: {status:status},
                    //     success: function(data){
                    //         alert(data);
                    //     },error:function(){ 
                    //         alert("error!!!!");
                    //     }
                });
                // })

                // alert(option);
            });

        </script>
        <script type="text/javascript">
                function ConfirmDelete()
              {
              var x = confirm("Are you sure you want to delete?");
              if (x)
                return true;
              else
                return false;
              }

              $("a#a_del").click(function(){
               return ConfirmDelete();
              });
        </script>
@endsection
