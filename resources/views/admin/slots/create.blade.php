@extends('layouts.dashboard')
    @section('title')
        Dashboard | Add Slot
    @endsection
    @section('content')
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu">

                           <li class="nav-item  ">
                                <a href="{{url('/admin/dashboard')}}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-item  ">
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
                            <li class="nav-item">
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
                                <li class="nav-item active open">
                                    <a href="{{url('/admin/slots/create')}}" class="nav-link ">
                                        <i class="icon-plus"></i>
                                        <span class="title">Add Slot</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/admin/slots')}}" class="nav-link ">
                                        <i class="icon-pencil"></i>
                                        <span class="title">Edit Slot</span>
                                    </a>
                                </li>
                        </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
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
                                                            <select name="time_range" class="form-group form-control">
                                                                <option value="">Select One</option>
                                                                <option value="10-12pm">10-12pm</option>
                                                                <option value="12-2pm">12-2pm</option>
                                                                <option value="2-4pm">2-4pm</option>
                                                            </select>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
