<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Web Demo</title>
    <base href="{{asset('')}}">
    <link href="asset/CSS/Common/Common.css" rel="stylesheet" />
    <link href="asset/CSS/Lib/jquery-ui.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    @yield('style')
</head>
<body>
    
    <!--Menu area-->
    <div class="wrapper">
        <!-- Sidebar -->
        @yield('menu')

        <!-- Page Content -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid dark-mode bg-light">
                    <!--Content area-->
                    <div class="content">
                        @include('Pages.layout.header')
                        <div class="content-body dark-mode bg-light">
                            @if(!empty($success))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Thành công! </strong> {{$success}}
                            </div>
                            @endif
                            @if(!empty($danger))
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Thất bại! </strong> {{$danger}}
                            </div>
                            @endif
                            @if(\Session::has('success'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Thành công! </strong> {{\Session::get('success')}}
                            </div>
                            @endif
                            @if(\Session::has('danger'))
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Thất bại! </strong> {{\Session::get('danger')}}
                            </div>
                            @endif
                            @yield('content')

                        </div>
                    </div>
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                </div>

            </nav>

        </div>
        <!-- Dark Overlay element -->
        <div class="overlay"></div>
    </div>
    <script src="asset/JS/Lib/dark-mode-switch.min.js"></script>


    <script src="asset/JS/Lib/jquery-3.5.0.min.js"></script>
    <script src="asset/JS/pages/Common.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    @yield('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="asset/JS/pages/Sidebar.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script src="{{url('/asset')}}/JS/Lib/jquery-3.5.1.min"> </script> --}}
</body>
</html>
