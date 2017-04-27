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
                    </ul>
                </div>
@yield('sidebar')
