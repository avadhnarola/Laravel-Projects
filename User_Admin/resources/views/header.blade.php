<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>YOM- Multipurpose HTML Theme</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{URL('files/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL('files/css/animate.css')}}">
	<link rel="stylesheet" href="{{URL('files/css/simple-line-icons.css')}}">
	<link rel="stylesheet" href="{{URL('files/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL('files/css/style.css')}}">
	<link rel="stylesheet" href="{{URL('files/rs-plugin/css/settings.css')}}">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="{{URL('/')}}">YOM</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="{{URL('/')}}">Home</a></li>
									<li><a href="#" class="has-submenu">Pages</a>
										<ul class="sub-menu">
											<li><a href="{{URL('/services')}}">Services</a></li>
											<li><a href="{{URL('/clients')}}">Clients</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Blog</a>
										<ul class="sub-menu">
											<li><a href="{{URL('/blog-grid')}}">Blog Grid</a></li>
											<li><a href="{{URL('/blog-single')}}">Single Post</a></li>
										</ul>
									</li>
									<li><a href="{{URL('/about')}}">About</a></li>
									<li><a href="#" class="has-submenu">Work</a>
										<ul class="sub-menu">
											<li><a href="{{URL('/three-column')}}">Three Columns</a></li>
											<li><a href="{{URL('/four-column')}}">Four Columns</a></li>
											<li><a href="{{URL('/single-project')}}">Single Project</a></li>
										</ul>
									</li>
									<li><a href="{{URL('/contact')}}">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>