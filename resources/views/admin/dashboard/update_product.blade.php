@extends('layouts.dashboard')
    @section('title')
        Dashboard | Edit Product
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
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

                        <ul class="page-sidebar-menu ">
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
                        <li class="nav-item  active open">
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

                    {{-- EDIT EACH PRODUCT BEGINS --}}
                    <span>



                    {{-- EDIT EACH PRODUCT ENDS --}}


                    <div class="row">
                        <div class="col-md-12" id="add_product">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('delete_message'))
                                <div class="alert alert-danger">
                                    {{ session('delete_message') }}
                                </div>
                            @endif
                            <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal form-row-seperated" action="#">
                            {{csrf_field()}}
                                <div class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-shopping-cart"></i>Edit Product </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                     
                                        <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Name:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-5">
                                                                <input type="text" class="form-control" value="{{$found_product->name}}" name="name" placeholder=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Description:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-5">
                                                                <textarea class="form-control" value="" name="description">{{$found_product->description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Category:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-5">
                                                                <select name="category_id" id="category_id" class="form-control" required="required">
                                                                <option value="">Select type</option>
                                                                @foreach($categories as $category)
                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Unit:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-2">
                                                                <input type="text" value="{{$found_product->unit}}"" class="form-control" name="unit" placeholder="">
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Unit Type:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-2">
                                                                <select name="unit_type_id" id="unit_type_id" class="form-control" required="required">
                                                                    <option value="">Select type</option>
                                                                    @foreach($unit_type as $unit_types)
                                                                         <option value="{{$unit_types->id}}">{{$unit_types->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Price:
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" value="{{$found_product->price}}" name="price" placeholder=""> </div>


                                                        </div>
                                                      

                                                        <div class="prod_im\g">
                                                            <img src="/dashboard/assets/layouts/layout4/img/sarelo2.svg" alt="" >
                                                            <div id="tab_images_uploader_container" class="margin-bottom-10">

                                                                <input type="file" name="product_image"  id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">
                                                                </input>

                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success"><i class="fa fa-check"></i>Update</button>
                                                        </div>
                                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                       
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
@endsection
