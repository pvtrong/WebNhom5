<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INSPINIA | Dashboard v.4</title>

    <link href="{{url('/backend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/backend')}}/font-awesome/css/font-awesome.css" rel="stylesheet">


    <link href="{{url('/backend')}}/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet"> 
    <link href="{{url('/backend')}}/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/animate.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/style.css" rel="stylesheet">
    <script src="{{url('/backend')}}/js/jquery-3.1.1.min.js"></script>

    <!-- Morris -->
    <link href="{{url('/backend')}}/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <script src="{{url('/backend')}}/js/plugins/dataTables/datatables.min.js"></script>
    <script src="{{url('/backend')}}/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <link href="{{url('/backend')}}/css/animate.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/style.css" rel="stylesheet">
    <link href="{{url('/backend')}}/css/plugins/summernote/summernote-bs4.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{url('/backend')}}/img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="{{route('logout-admin')}}">logout</a></li>
                            <li><a class="dropdown-item" href="">change_password</a></li>
                            <!-- <li><a class="dropdown-item" href="">change_password</a></li> -->
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href=""> <i class="fa fa-home" aria-hidden="true"></i><span class="nav-label">admin</span></a>
                </li>
                <li class="">
                    <a href="{{route('category')}}"><i class="fa fa-bars" aria-hidden="true"></i> <span class="nav-label">Danh mục sản phẩm</span></span></a>
                </li>
                <!-- <li>
                    <a href=""><i class="fa fa-book" aria-hidden="true"></i><span class="nav-label">Sản phẩm</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label">Người dùng</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label">Quản lý ảnh</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label">Quản tin tức</span></a>
                </li> -->
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>


            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="{{url('/backend')}}/img/a7.jpg">
                                </a>
                                <div>
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="{{url('/backend')}}/img/a4.jpg">
                                </a>
                                <div>
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="{{url('/backend')}}/img/profile.jpg">
                                </a>
                                <div>
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
<!-- 

                <li>
                    <a href="login.blade.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li> -->
            </ul>

        </nav>
        
        </div>


        <div class="wrapper wrapper-content">
            @yield('content')
        <div class="row">
            

            
        </div>
        </div>


        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
          
        </div>

        </div>
        
    </div>

    <!-- Mainly scripts -->
    <script src="{{url('/backend')}}/js/jquery-3.1.1.min.js"></script>
    <script src="{{url('/backend')}}/js/popper.min.js"></script>
    <script src="{{url('/backend')}}/js/bootstrap.js"></script>
    <script src="{{url('/backend')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{url('/backend')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <!-- <script src="{{url('/backend')}}/js/plugins/flot/jquery.flot.js"></script>
    <script src="{{url('/backend')}}/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{url('/backend')}}/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="{{url('/backend')}}/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="{{url('/backend')}}/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="{{url('/backend')}}/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="{{url('/backend')}}/js/plugins/flot/curvedLines.js"></script> -->

    <!-- Peity -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
    <script src="{{url('/backend')}}/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="{{url('/backend')}}/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{url('/backend')}}/js/inspinia.js"></script>
    <script src="{{url('/backend')}}/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{url('/backend')}}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="{{url('/backend')}}/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{url('/backend')}}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="{{url('/backend')}}/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="{{url('/backend')}}/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="{{url('/backend')}}/js/plugins/chartJs/Chart.min.js"></script>
    <script src="{{url('/backend')}}/js/plugins/summernote/summernote-bs4.js"></script>
    <script src="{{url('/backend')}}/js/plugins/pace/pace.min.js"></script>
   <script src="{{url('/backend')}}/js/plugins/dataTables/datatables.min.js"></script>
    <script src="{{url('/backend')}}/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('/backend')}}/js/ajax.js"></script>


    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });
    </script>
</body>
</html>
