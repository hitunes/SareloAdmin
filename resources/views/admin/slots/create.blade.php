@extends('layouts.dashboard')
    @section('title')
        Dashboard | Add Slot
    @endsection

    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu">

                           <li class="nav-item  ">
                                <a href="{{url('/admin/dashboard')}}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/admin/slots')}}" class="nav-link ">
                                    <i class="icon-basket"></i>
                                    <span class="title">Slot</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item active open">
                                <a href="{{url('/admin/slots/create')}}" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Add Slot</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <!--<li class="nav-item  ">
                                <a href="order_view.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">Order View</span>
                                </a>
                            </li>-->
                            <!--<li class="nav-item  ">
                                <a href="product.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Products</span>
                                </a>
                            </li>-->
                            <li class="nav-item ">
                                <a href="{{url('/admin/slots')}}" class="nav-link ">
                                    <i class="icon-pencil"></i>
                                    <span class="title">Edit Slot</span>
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
                                        <i class="icon-settings font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase"> Create New Slot </span>
                                    </div>
                                   
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <div class="table-actions-wrapper">
                                            <span> </span>
                                          
                                        </div>
                                        
                                        <a href="{{ url('/admin/slots') }}" title="Back">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                                        </a>
                                        <br />
                                        <br />
                                        {{-- {{ $slots->links() }} --}}
                                        <div class="row">
                                            <form method="POST">
                                                {{csrf_field()}}
                                                @if ($errors->any())
                                                    <ul class="alert alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('time_range') ? 'has-error' : ''}}">
                                                        {!! Form::label('time_range', 'Time Range', ['class' => 'col-md-4 control-label']) !!}
                                                        <div class="col-md-6">
                                                            {!! Form::text('time_range', null, ['class' => 'form-control']) !!}
                                                            {!! $errors->first('time_range', '<p class="help-block">:message</p>') !!}
                                                        </div> <br> <br>
                                                    </div><div class="form-group {{ $errors->has('slot_available') ? 'has-error' : ''}}">
                                                        {!! Form::label('slot_available', 'Slot Available', ['class' => 'col-md-4 control-label']) !!}
                                                        <div class="col-md-6">
                                                            {!! Form::number('slot_available', null, ['class' => 'form-control']) !!}
                                                            {!! $errors->first('slot_available', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div> <br> <br> <br>

                                                    <div class="form-group">
                                                       <center>
                                                            <div class="col-md-offset-4 col-md-4">
                                                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
                                                            </div>
                                                       </center>
                                                    </div>
                                                </div>                                                
                                            </form>
                                        </div>
                                    </div>
                                    {{-- {{ $orders->links() }} --}}
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
         
        </div>
@endsection
