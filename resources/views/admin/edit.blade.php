@extends('layouts.dashboard')
    @section('title')
        Dashboard | Manage Admin
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
                        <div class="col-md-6 col-md-offset-2">
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
                                        <span class="caption-subject bold uppercase"> Manage Admin</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                   				<div class="well">
                                   					<form action="" method="POST" role="form">
                                                               {{csrf_field()}}
                                   						<legend><center>
                                   							Moderate Admin
                                   						</center></legend>
                                   						@if (session('success'))
                                                                   <div class="alert alert-success">
                                                                       {{ session('success') }}
                                                                   </div>
                                                               @elseif(session('delete_message'))
                                                                   <div class="alert alert-danger">
                                                                       {{ session('delete_message') }}
                                                                   </div>
                                                                   
                                                               @endif
                                              <div class="form-group">
                                                <label for="">First name:</label>
                                                <input type="text" name="text" value="{{$admin->first_name}}" class="form-control" id="" placeholder=""> <br>
                                              </div>
                                              <div class="form-group">
                                                <label for="">Last name:</label>
                                                <input type="text" name="text" value="{{$admin->last_name}}" class="form-control" id="" placeholder=""> <br>
                                              </div>
                                   						<div class="form-group">
                                   							<label for="">Email:</label>
                                   							<input type="text" name="email" value="{{$admin->email}}" class="form-control" id="" placeholder="Email address here"> <br>
                                   								@if ($errors->has('email')) <p class="help-block" style="color: red">{{ $errors->first('email') }}</p> @endif
                                   						</div>
                                   						<center>
                                   							<button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Update </button>
                                   						</center>
                                   						
                                   					</form>
                                   				</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
@endsection
