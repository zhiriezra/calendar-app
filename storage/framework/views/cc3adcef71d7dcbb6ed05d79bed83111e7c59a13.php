<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo asset('front/images/favi.png'); ?>">
        <!-- App title -->
        <title>Reminder App - Dashboard</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('plugins/morris/morris.css')); ?>">

        <!-- App css -->
        <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/core.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/components.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/pages.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/menu.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo e(asset('plugins/switchery/switchery.min.css')); ?>">

		<!-- DataTables -->
        <link href="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/buttons.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/responsive.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/scroller.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/dataTables.colVis.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('plugins/datatables/fixedColumns.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>


        <!-- HTML5 Shiv and Respond.js') }} IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js') }}/1.3.0/respond.min.js') }}"></script>
        <![endif]-->

        <script src="<?php echo e(asset('assets/js/modernizr.min.js')); ?>"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!-- <a href="index.html" class="logo"><span>CHI<span>BEK</span></span><i class="mdi mdi-layers"></i></a> -->
                    <!-- Image logo -->
                    <a href="<?php echo e(route('home')); ?>" class="logo">
                        <span>
                            <img src="<?php echo asset('front/images/logo.png'); ?>" alt="" height="50">
                        </span>
                        <i>
                            <img src="<?php echo asset('front/images/logo.png'); ?>" alt="" height="50">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            
                            
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                        	<li><a href="#"><i class="fa fa-user m-r-5"></i> <?php echo e(Auth::user()->name); ?></a></li>

                            <li><a href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                           
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
							</form>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                         	
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-book"></i> <span> Manage Events </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo e(route('create.event')); ?>">Add Event</a></li>
                                    <li><a href="<?php echo e(route('events')); ?>">Events</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> zhiriezra@gmail.com</p>
                        <p class="m-b-0"><span class="text-custom">Call:</span> <br/>+234 7035 621 550</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                       <?php echo $__env->yieldContent('content'); ?>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    Copyright <?php echo e(date('Y')); ?>. All Rights Reserved.</a>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/detect.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/fastclick.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.blockUI.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/waves.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.slimscroll.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.scrollTo.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/switchery/switchery.min.js')); ?>"></script>

        <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.bootstrap.js')); ?>"></script>

        <script src="<?php echo e(asset('plugins/datatables/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/buttons.bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/pdfmake.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/vfs_fonts.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.fixedHeader.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.keyTable.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/responsive.bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.scroller.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.colVis.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/datatables/dataTables.fixedColumns.min.js')); ?>"></script>

        <!-- init -->
        <script src="<?php echo e(asset('assets/pages/jquery.datatables.init.js')); ?>"></script>


        <!-- Counter js  -->
        <script src="<?php echo e(asset('plugins/waypoints/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/counterup/jquery.counterup.min.js')); ?>"></script>

        <!--Morris Chart-->
		<script src="<?php echo e(asset('plugins/morris/morris.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins/raphael/raphael-min.js')); ?>"></script>

        <!-- Dashboard init -->
        <script src="<?php echo e(asset('assets/pages/jquery.dashboard.js')); ?>"></script>

        <!-- App js -->
        <script src="<?php echo e(asset('assets/js/jquery.core.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.app.js')); ?>"></script>

        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });


                $('select[name="wards"]').on('change', function(){
                    var countryId = $(this).val();
                    if(countryId) {
                        $.ajax({
                            url: '/units/get/'+countryId,
                            type:"GET",
                            dataType:"json",
                            beforeSend: function(){
                                $('#loader').css("visibility", "visible");
                            },

                            success:function(data) {

                                $('select[name="units"]').empty();

                                $.each(data, function(key, value){

                                    $('select[name="units"]').append('<option value="'+ key +'">' + value + '</option>');

                                });
                            },
                            complete: function(){
                                $('#loader').css("visibility", "hidden");
                            }
                        });
                    } else {
                        $('select[name="units"]').empty();
                    }

                });
            });
            TableManageButtons.init();

        </script>



    </body>
</html>