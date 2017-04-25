<!DOCTYPE html>
<html lang="en">
   
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/dashboard/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/dashboard/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/dashboard/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/dashboard/assets/layouts/layout4/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="/dashboard/assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="/dashboard/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    <style type="text/css">
        #edit_each_product{
            display: none;
        }
        .dataTables_extended_wrapper div.dataTables_info, .dataTables_extended_wrapper div.dataTables_length, .dataTables_extended_wrapper div.dataTables_paginate{
            display: none;
        }
    </style>
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="/dashboard/assets/layouts/layout4/img/sarelo2.svg" alt="logo" class="logo-default" />
                    </a>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                <div class="page-actions">
                    <div class="btn-group">
                        
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-docs"></i> New Post </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-tag"></i> New Comment </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-share"></i> Share </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-flag"></i> Comments
                                    <span class="badge badge-success">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-users"></i> Feedbacks
                                    <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                               
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <li class="separator hide"> </li>
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           
                            <!-- END INBOX DROPDOWN -->
                            <li class="separator hide"> </li>
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                
                                   

                                <a href="{{url('admin/logout')}}" >
                                
                                    <span style="color: #222; cursor: default;" class="username username-hide-on-mobile"><b> Admin </b>| </span>
                                 
                                 
                                    <span class="username username-hide-on-mobile"> Logout
                                    </span>
                                </a>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <!--<img alt="" class="img-circle" src="assets/layouts/layout4/img/avatar9.jpg" /> </a>-->
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li class="divider"> </li>
                                    
                                    <li>
                                        <a href="{{url('admin/logout')}}">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                           
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

            @yield('content')

                <div class="page-footer">
            
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="dashboard/assets/global/plugins/respond.min.js"></script>
<script src="dashboard/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="/dashboard/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <script src="/dashboard/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/dashboard/assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/dashboard/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/dashboard/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/pages/scripts/ecommerce-orders.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
                <script src="/dashboard/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="/dashboard/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="/dashboard/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function ConfirmDelete()
              {
              var x = confirm("Are you sure you want to delete?");
              if (x)
                return true;
              else
                return false;
              }

              $("a#a_del").click(function(){
               return ConfirmDelete();
              });

              // $("a#edit_product").click(function(){
              //   $("#edit_each_product").show();
              //   $("#add_product").hide();
              //   $(window).scrollTop(0);
              // });
        </script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
