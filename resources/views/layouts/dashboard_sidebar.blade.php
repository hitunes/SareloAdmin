<div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu">
                        <li class="nav-item  active open">
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
@yield('sidebar')
