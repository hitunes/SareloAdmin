@extends('layouts.dashboard')
    @section('title')
        Dashboard | Users
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
                        <li class="dropdown ">
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
                        <li class="dropdown active open">
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
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
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
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Admins' Detail</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>
                                                         First name 
                                                    </center>
                                                 </th>
                                                 <th>
                                                    <center>
                                                         Last name 
                                                    </center>
                                                 </th>
                                                <th>
                                                    <center>
                                                         Email 
                                                    </center>
                                                 </th>
                                                <th> 
                                                    <center>
                                                        Date credit 
                                                    </center>
                                                </th>
                                                <th> 
                                                    <center>
                                                        Phone Number
                                                    </center>
                                                </th>
                                                 <th> 
                                                    <center>
                                                        Change Password
                                                    </center>
                                                </th>
                                                <th> 
                                                    <center>
                                                        Moderate
                                                    </center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admins as $admin)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <center>
                                                            {{$admin->first_name}}
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            {{$admin->last_name}}
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <a href="mailto:{{$admin->email}}"> {{$admin->email}} </a>
                                                        </center>
                                                    </td>
                                                    <td> 
                                                        <center>
                                                            {{$admin->created_at}}
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            {{$admin->phone}}
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <a href="{{url('admin/change_password',$admin->id)}}">Change</a>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <a href="{{url('admin/edit',$admin->id)}}" class="btn btn-sm btn-default margin-bottom" id="edit_product">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                        </center>
                                                    </td>
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
@endsection
