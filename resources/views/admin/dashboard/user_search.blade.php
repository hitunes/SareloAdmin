@extends('layouts.dashboard')
    @section('title')
        Dashboard | Users
    @endsection
    @section('content')
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu">
                           <li class="nav-item">
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
                        <li class="nav-item active open">
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
                </div>
            </div>
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
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
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Users' Profile</span>
                                    </div>
                                       <div class="actions">
                                         <form id="search_text" name="form_search" method="POST" action="{{url('admin/search_user')}}" class="form-inline">
                                         {{csrf_field()}}
                                           <div class="form-group">
                                             <div class="input-group">
                                              <input class="form-control" name="search" placeholder="Search for an order..." type="text">
                                              <span class="input-group-btn">
                                                 <input type="submit" class="btn btn-default"  value="Go!"/> 
                                              </span>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                                 @if(count($users) <= 0)
                                        <div class="row">
                                            <div class="col-lg-6 col-lg-offset-3">
                                                    
                                                            <div class="row">
                                                                <h3> 
                                                                    <center>
                                                                        NO RESULT FOUND! FOR YOUR SEARCH <a href="{{url('admin/users')}}"><< back</a>
                                                                    </center>
                                                                </h3>
                                                            </div>
                                            </div>
                                        </div>

                                @else
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> First name </th>
                                                    <th> Last name</th>
                                                    <th> Email </th>
                                                    <th> Total Amount Ordered (NGN) </th>
                                                    <th> Date credit </th>
                                                    <th> Phone Number </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($users as $user)
                                                    <tr class="odd gradeX">
                                                        <td>
                                                            {{$user->first_name}} 
                                                        </td>

                                                        <td>
                                                            {{$user->last_name}} </a>
                                                        </td>

                                                        <td>
                                                            <a href="mailto:{{$user->email}}"> {{$user->email}} </a>
                                                        </td>

                                                        <td class="center">
                                                            &#x20A6;{{number_format($user->total, 2)}}
                                                        </td>

                                                        <td class="center"> {{$user->created_at}} </td>
                                                        <td>
                                                            @if(isset($user->phone))
                                                                {{$user->phone}}
                                                            @else
                                                                {{"No Phone Number Uploaded"}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{url('admin/users',$user->id)}}" data-toggle="modal" class="btn btn-primary" >View</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
@endsection
