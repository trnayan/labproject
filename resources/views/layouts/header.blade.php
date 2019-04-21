<!DOCTYPE html>
<html>
    
<head>
        
        <!-- Title -->
        <title>Autobiography | Home </title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard " />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="{{ url('/') }}/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="{{ url('/') }}/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="{{ url('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('/') }}/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('/') }}/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('/') }}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('/') }}/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('/') }}/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        <link href="{{ url('/') }}/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="{{ url('/') }}/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="{{ url('/') }}/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="{{ url('/') }}/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
                <script src="{{ url('/') }}/ckeditor/ckeditor.js"></script>
        
<script src="https://cdn.bootcss.com/vue/2.5.9/vue.js"></script>
<script src="https://cdn.bootcss.com/vue-router/3.0.1/vue-router.js"></script>

       
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        
        <div class="menu-wrap">
            <nav class="profile-menu">
                <div class="profile"><img src="{{ url('/') }}/assets/images/profile-menu-image.png" width="60" alt="David Green"/><span>{{ Auth::user()->name }} {{ Auth::user()->last_name }} </span></div>
                <div class="profile-menu-list">
                    <a href="#"><i class="fa fa-star"></i><span>Dashboard</span></a>
                    <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                    <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                    <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
                </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
        </div>
        <!-- <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div>Input Group
        </form>Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index-2.html" class="logo-text"><span>AutoBiography</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                             
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout 
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                               <!--  <li>    
                                   <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                               </li> -->
                               
                              
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="{{ url('/') }}/assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="/admin"><i class="fa fa-user"></i>Dashboard</a></li>
                                      <li role="presentation"><a href=" {{ url('wallet-deposit') }}"><i class="fa fa-envelope"></i>Cash In</a></li>
                                        
                                        
                                        <li role="presentation"><a href="{{ url('wallet-history') }}"><i class="fa fa-envelope"></i>History<span class="badge badge-success pull-right">1</span></a></li>
                                        

                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="{{ url('manual-design') }}"><i class="fa fa-lock"></i>Set Design</a></li>

                                        <li role="presentation"><a href="{{ url('design') }}"><i class="fa fa-lock"></i>Auto Design</a></li>

                                        <li role="presentation"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                        <i class="fa fa-comments"> Balance  @foreach($deposit as $deposits){{ $deposits->amount }}@endforeach.00 
                                        $</i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="{{ url('/') }}/assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>{{ Auth::user()->name }} {{ Auth::user()->last_name }}  <br><small>{{ Auth::user()->dob }} </small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        
                     
                        <li class=""><a href="{{ url('/') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>

                        <li class=""><a href="{{ url('wallet-deposit') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-usd"></span><p>Cash In</p></a></li>
                      <li class=""><a href="{{ url('wallet-history') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-grain"></span><p>Statement</p></a></li>
                      <li class=""><a href="{{ url('design') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-cloud-download"></span><p>Auto Design</p></a></li>
                       <li class=""><a href="{{ url('allview') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-cloud-download"></span><p>allview </p></a></li>
                        <li class=""><a href="{{ url('published') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-cloud-download"></span><p>published Design</p></a></li>
                      <li class=""><a href="{{ url('manual-design') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>Manual Design</p></a></li>
                      <!-- <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Pdf</p></a></li> -->
          
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->