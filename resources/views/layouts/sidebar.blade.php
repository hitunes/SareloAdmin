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
                                <a href="{{url('/admin/index')}}" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
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
                                <a href="{{url('/admin/order_view')}}" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">Order View</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{url('/admin/products')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Products</span>
                                </a>
                            </li>
                            <li class="nav-item  active open">
                                <a href="{{url('/admin/product_edit')}}" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Product Edit</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    <!-- END SIDEBAR MENU -->
</div>
                <!-- END SIDEBAR -->
{{-- @yield('sidebar') --}}