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
                           <li class="nav-item active">
                                   <a href="{{url('/admin/users')}}" class="nav-link ">
                                       <i class="icon-user"></i>
                                       <span class="title">Users</span>
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
                                   <i class="icon-basket"></i>
                                   <span class="title">Products</span>
                               </a>
                           </li>

                           <li class="nav-item  ">
                               <a href="{{url('/admin/slots')}}" class="nav-link ">
                                   <i class="icon-basket"></i>
                                   <span class="title">Slots</span>
                               </a>
                           </li>
                           <li class="nav-item  ">
                                <a href="{{url('/admin/unit-types')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Unit Types</span>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Users' Profile</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> 
                                                </th>
                                                <th> Email </th>
                                                <th> Expense (NGN) </th>
                                                <th> Date credit </th>
                                                <th> Phone Number </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($users as $user)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <input type="checkbox" class="checkboxes" value="1" /> 
                                                    </td>
                                                    <td>
                                                        <a href="mailto:{{$user->email}}"> {{$user->email}} </a>
                                                    </td>
                                                    <td> 120 </td>
                                                    <td class="center"> 12 Jan 2012 </td>
                                                    <td>
                                                        {{$user->phone}}
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
