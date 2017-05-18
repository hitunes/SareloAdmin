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
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/admin/orders')}}" class="nav-link ">
                                <i class="icon-basket"></i>
                                <span class="title">Orders</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{url('/admin/products')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Products</span>
                            </a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{url('/admin/unit-types')}}" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-basket"></i>
                            Unit Types <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/unit-types/create')}}">Add Unit-Type</a></li>
                                <li><a href="{{url('/admin/unit-types')}}">Edit Product</a></li>
                                <li><a href="{{url('/admin/unit-types')}}">Delete Unit-Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active open">
                            <a href="{{url('/admin/slots')}}" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-basket"></i>
                            Slots <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/slots/create')}}">Add Slot</a></li>
                                <li><a href="{{url('/admin/slots')}}">Edit Slot</a></li>
                                <li><a href="{{url('/admin/slots')}}">Delete Slot</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                                <a href="{{url('/admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{url('/admin/show')}}" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-basket"></i>
                            Manage Admin <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('admin/create')}}">Add Admin</a></li>
                                <li><a href="{{url('/admin/show')}}">Edit Admin</a></li>
                                <li><a href="{{url('/admin/show')}}">Delete</a></li>
                            </ul>
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
                                                     <div class="form-group {{ $errors->has('day_of_week') ? 'has-error' : ''}}">
                                                        {!! Form::label('day_of_week', 'Day of week', ['class' => 'col-md-4 control-label']) !!}
                                                        <div class="col-md-6">
                                                            <select name="day_of_week" id="input" class="form-control" required="required">
                                                            
                                                                <option value="">Select</option>
                                                                <option value="0">Sunday</option>
                                                                <option value="1">Monday</option>
                                                                <option value="2">Tuesday</option>
                                                                <option value="3">Wednesday</option>
                                                                <option value="4">Thursday</option>
                                                                <option value="5">Friday</option>
                                                                <option value="6">Saturday</option>
                                                            </select>
                                                            {!! $errors->first('day', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div> <br> <br> <br>
                                                    <div class="form-group {{ $errors->has('from') ? 'has-error' : ''}}">
                                                        {!! Form::label('from', 'Time Range', ['class' => 'col-md-4 control-label']) !!}
                                                        <div class="col-md-6">
                                                           <table class="table table-bordered table-hover">
                                                               <thead>
                                                                   <tr>
                                                                       <th>From</th>
                                                                       <th>Moment</th>
                                                                       <th>To</th>
                                                                       <th>Moment</th>

                                                                   </tr>
                                                               </thead>
                                                               <tbody>
                                                                   <tr>
                                                                       <td>
                                                                           <select name="from">
                                                                               <option value="">From</option>
                                                                               <option value="1">1</option>
                                                                               <option value="2">2</option>
                                                                               <option value="3">3</option>
                                                                               <option value="4">4</option>
                                                                               <option value="5">5</option>
                                                                               <option value="6">6</option>
                                                                               <option value="7">7</option>
                                                                               <option value="8">8</option>
                                                                               <option value="9">9</option>
                                                                               <option value="10">10</option>
                                                                               <option value="11">11</option>
                                                                               <option value="12">12</option>
                                                                           </select>
                                                                       </td>
                                                                       <td>
                                                                           <select name="moment1">
                                                                               <option value="am">AM</option>
                                                                               <option value="pm">PM</option>
                                                                           </select>
                                                                       </td>
                                                                       <td>
                                                                           <select name="to">
                                                                               <option value="">TO</option>

                                                                               <option value="1">1</option>
                                                                               <option value="2">2</option>
                                                                               <option value="3">3</option>
                                                                               <option value="4">4</option>
                                                                               <option value="5">5</option>
                                                                               <option value="6">6</option>
                                                                               <option value="7">7</option>
                                                                               <option value="8">8</option>
                                                                               <option value="9">9</option>
                                                                               <option value="10">10</option>
                                                                               <option value="11">11</option>
                                                                               <option value="12">12</option>
                                                                           </select>
                                                                       </td>
                                                                       <td>
                                                                           <select name="moment2">
                                                                               <option value="am">AM</option>
                                                                               <option value="pm">PM</option>
                                                                           </select>
                                                                       </td>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                        </div> <br> <br>

                                                    </div> <br> <br>
                                                    <div class="form-group {{ $errors->has('slot_available') ? 'has-error' : ''}}">
                                                        {!! Form::label('slot_available', 'Number of slot available', ['class' => 'col-md-4 control-label']) !!}
                                                        <div class="col-md-6">
                                                            {!! Form::number('slot_available', null, ['class' => 'form-control']) !!}
                                                            {!! $errors->first('slot_available', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div> <br> <br> <br>

                                                    <div class="form-group" style="margin-left: 83px;">
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
