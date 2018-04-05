<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
    <style>
        #sidebar-wrapper {
            z-index: 1000;
            position: fixed;
            left: 250px;
            width: 0;
            height: 100%;
            margin-left: -250px;
            overflow-y: auto;
            background: #000;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            width: 100%;
            position: absolute;
            padding: 15px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-right: -250px;
        }


        /* Sidebar Styles */

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sidebar-nav li {
            text-indent: 20px;
            line-height: 40px;
        }

        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #999999;
        }

        .sidebar-nav li a:hover {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .sidebar-nav li a:active, .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav>.sidebar-brand {
            height: 65px;
            font-size: 18px;
            line-height: 60px;
        }

        .sidebar-nav>.sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav>.sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        @media(min-width:768px) {
            #wrapper {
                padding-left: 0;
            }
            #wrapper.toggled {
                padding-left: 250px;
            }
            #sidebar-wrapper {
                width: 270px;
            }
            #wrapper.toggled #sidebar-wrapper {
                width: 250px;
            }
            #page-content-wrapper {
                padding: 20px;
                position: relative;
            }
            #wrapper.toggled #page-content-wrapper {
                position: relative;
                margin-right: 0;
            }
        }

    </style>
</head>
<body id="admin-page">
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Forum Admin
                </a>
            </li>
            <li>
                <a href="{{route('users.index')}}">Users</a>
            </li>
            <li>
                <a href="{{route('categories.index')}}">Categories</a>
            </li>
            <li>
                <a href="{{route('threads.index')}}">Threads</a>
            </li>
            <li>
                <a href="{{route('comments.index')}}">Comments</a>
            </li>
        </ul>
    </div>
    <!-- Navigation -->
    {{--<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="/">Home</a>--}}
        {{--</div>--}}
        {{--<!-- /.navbar-header -->--}}
        {{--<ul class="nav navbar-top-links navbar-right">--}}
            {{--<!-- /.dropdown -->--}}
            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu dropdown-user">--}}
                    {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.dropdown-user -->--}}
            {{--</li>--}}
            {{--<!-- /.dropdown -->--}}
        {{--</ul>--}}

        {{--<div class="navbar-default sidebar" role="navigation">--}}
            {{--<div class="sidebar-nav navbar-collapse">--}}
                {{--<ul class="nav" id="side-menu">--}}
                    {{--<li class="sidebar-search">--}}
                        {{--<div class="input-group custom-search-form">--}}
                            {{--<input type="text" class="form-control" placeholder="Search...">--}}
                            {{--<span class="input-group-btn">--}}
                                    {{--<button class="btn btn-default" type="button">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                    {{--</button>--}}
                                {{--</span>--}}
                        {{--</div>--}}
                        {{--<!-- /input-group -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i>Users<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="{{route('users.index')}}">All Users</a>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                                {{--<a href="{{route('users.create')}}">Create User</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="{{route('threads.index')}}">All Thread</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('threads.create')}}">Create Thread</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i>Categories<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">All Categories</a>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                                {{--<a href="#">Create Category</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}


                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i>Media<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">All Media</a>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                                {{--<a href="#">Upload Media</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="flot.html">Flot Charts</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="morris.html">Morris.js Charts</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="panels-wells.html">Panels and Wells</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="buttons.html">Buttons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="notifications.html">Notifications</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="typography.html">Typography</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icons.html"> Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="grid.html">Grid</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level <span class="fa arrow"></span></a>--}}
                                {{--<ul class="nav nav-third-level">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<!-- /.nav-third-level -->--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li class="active">--}}
                        {{--<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a class="active" href="blank.html">Blank Page</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="login.html">Login Page</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                {{--</ul>--}}


            {{--</div>--}}
            {{--<!-- /.sidebar-collapse -->--}}
        {{--</div>--}}
        {{--<!-- /.navbar-static-side -->--}}
    {{--</nav>--}}





    {{--<div class="navbar-default sidebar" role="navigation">--}}
        {{--<div class="sidebar-nav navbar-collapse">--}}
            {{--<ul class="nav" id="side-menu">--}}
                {{--<li>--}}
                    {{--<a href="/profile"><i class="fa fa-dashboard fa-fw"></i>Profile</a>--}}
                {{--</li>--}}




                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                        {{--<li>--}}
                            {{--<a href="">All Posts</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="">Create Post</a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                    {{--<!-- /.nav-second-level -->--}}
                {{--</li>--}}





            {{--</ul>--}}

        {{--</div>--}}

    {{--</div>--}}

</div>






<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>

                @yield('content')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>

@yield('scripts')
@yield('footer')





</body>

</html>
