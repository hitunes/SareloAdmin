<ul class="page-sidebar-menu m-t-0 m-b-0">
                                                <li class="nav-item bd-gray-lite">
                                                    <a href="#" class="clearfix c-brand-green nav-link p-20 p-l-25 p-r-25">
                                                        <span class="title pull-left">Account</span>
                                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item active open bd-gray-lite">
                                                    <a href="/my-orders" class="clearfix c-brand-green nav-link p-20 p-l-25 p-r-25">
                                                        <span class="title pull-left">My Orders</span>
                                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item bd-gray-lite">
                                                    <a href="/my-addresses" class="clearfix c-brand-green nav-link p-20 p-l-25 p-r-25">
                                                        <span class="title pull-left">Addresses</span>
                                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item bd-gray-lite">
                                                    <a href="#" class="clearfix c-brand-green nav-link p-20 p-l-25 p-r-25">
                                                        <span class="title pull-left">Notifications</span>
                                                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item bd-gray-lite">
                                                    
                                                    <a class="clearfix c-brand-green nav-link p-20 p-l-25 p-r-25" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        <span class="title pull-left">Log Out</span>
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>  
                                                </li>
                                            </ul>