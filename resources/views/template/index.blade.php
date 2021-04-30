<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="IndoUi – Bootstrap 4 Admin Dashboard HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin, admin dashboard template, admin panel template, admin template, best bootstrap admin template, bootstrap 4 admin template, bootstrap 4 dashboard template, bootstrap admin template, bootstrap dashboard template, html admin template, html5 dashboard template, html5 admin template, modern admin template, simple admin template, template admin bootstrap 4"/>

		<!-- Favicon -->
		<link rel="icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/brand/favicon.ico" />

		<!-- Title -->
		<title>IndoUi – Bootstrap 4 Admin Dashboard HTML Template</title>

		<!--Bootstrap css-->
		<link rel="stylesheet" href="{{ mix('/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!--Style css -->
		<link href="{{ mix('/css/style.css') }}" rel="stylesheet" />
		<link href="{{ mix('/css/dark-style.css') }}" rel="stylesheet" />
		<link href="{{ mix('/css/skin-modes.css') }}" rel="stylesheet">

		<!-- P-scrollbar css-->
		<link href="{{ mix('/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

		<!-- Sidemenu css -->
		<link href="{{ mix('/plugins/sidemenu/sidemenu.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
		<!--Daterangepicker css-->
		<link href="{{ mix('/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

		<!-- Rightsidebar css -->
		<link href="{{ mix('/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!---Icons css-->
		<link href="{{ mix('/css/icons.css') }}" rel="stylesheet" />

	</head>

	<body class="app sidebar-mini rtl">

		{{-- <!--Global-Loader-->
		<div id="global-loader">
			<img src="../../assets/images/loader.svg" alt="loader">
		</div> --}}

		<div class="page">
			<div class="page-main">

				<!--app-header-->
				<div class="app-header header d-flex navbar-collapse">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="../../assets/images/brand/logo.png" class="header-brand-img main-logo" alt="IndoUi logo">
								<img src="../../assets/images/brand/logo-light.png" class="header-brand-img dark-main-logo" alt="IndoUi logo">
								<img src="../../assets/images/brand/icon-light.png" class="header-brand-img dark-icon-logo" alt="IndoUi logo">
								<img src="../../assets/images/brand/icon.png" class="header-brand-img icon-logo" alt="IndoUi logo">
							</a><!-- logo-->
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle"  href="#"><i class="fe fe-align-left"></i></a>
								<a class="close-toggle"  href="#"><i class="fe fe-x"></i></a>
							</div>
							<div class="d-none dropdown d-md-flex header-settings">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid mr-2"></i><span class="lay-outstyle mt-1">Settings</span>
									<span class="pulse2 bg-warning" aria-hidden="true"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
									<a class="dropdown-item" href="#">Option 1</a>
									<a class="dropdown-item" href="#">Option 2</a>
									<a class="dropdown-item" href="#">Option 3</a>
									<a class="dropdown-item" href="#">Option 4</a>
									<a class="dropdown-item" href="#">Option 5</a>
								</div>
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right">
								<div class="d-md-flex header-search" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group ">
											<input type="text" class="form-control" placeholder="Search...">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fe fe-x"></i>
												</button>
												<button type="submit" class="btn btn-default">
													<i class="fe fe-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div><!-- Search -->
								<div class="d-md-flex">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-md-flex header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="nav-unread badge badge-danger badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center" href="#">Notifications</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar mr-3 br-3 align-self-center avatar-md cover-image bg-primary-transparent text-primary"><i class="fe fe-mail"></i></span>
											<div>
												<span class="font-weight-bold"> Commented on your post </span>
												<div class="small text-muted d-flex">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-secondary-transparent text-secondary"><i class="fe fe-download"></i>
											</span>
											<div>
												<span class="font-weight-bold"> New file has been Uploaded </span>
												<div class="small text-muted d-flex">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-warning-transparent text-warning"><i class="fe fe-user"></i>
											</span>
											<div>
												<span class="font-weight-bold"> User account has Updated</span>
												<div class="small text-muted d-flex">
													20 mins ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-info-transparent text-info"><i class="fe fe-shopping-cart"></i>
											</span>
											<div>
												<span class="font-weight-bold"> New Order Recevied</span>
												<div class="small text-muted d-flex">
													1 hour ago

												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add New</a>
												<a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View All</a>
											</div>
										</div>
									</div>
								</div>
								<!--Navbar -->
								<div class="dropdown header-profile">
									<a class="nav-link pr-0 leading-none d-flex pt-1" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="../../assets/images/users/female/2.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-1">Vanessa Dyer</h5>
												<small class="text-muted">Web Developer</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Profile</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-edit"></i>Schedule</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-icon btn-facebook btn-sm"><i class="icon icon-social-facebook"></i></a>
												<a href="#" class="btn btn-icon btn-twitter btn-sm"><i class="icon icon-social-twitter"></i></a>
												<a href="#" class="btn btn-icon btn-instagram btn-sm"><i class="icon icon-social-instagram"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="dropdown d-md-flex Sidebar-setting">
									<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-more-horizontal"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--app-header end-->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar toggle-sidebar">
					<ul class="side-menu toggle-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="index.html"><span>Analytics Dashboard</span></a></li>
								<li><a class="slide-item" href="index2.html"><span>E-Commerce Dashboard</span></a></li>
								<li><a class="slide-item" href="index3.html"><span>Sales Dashboard</span></a></li>
								<li><a class="slide-item" href="index4.html"><span>IT Dashboard</span></a></li>
								<li><a class="slide-item" href="index5.html"><span>Logistics Dashboard</span></a></li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-codepen"></i><span class="side-menu__label">Widgets</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
								<li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
								<li><a href="wysiwyag.html" class="slide-item"> Form Editor</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chart-chartist.html" class="slide-item">Chartist Charts</a></li>
								<li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="chart-js.html" class="slide-item"> Charts js</a></li>
								<li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
								<li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
								<li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
								<li><a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="tables.html" class="slide-item">Default table</a></li>
								<li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
							</ul>
						</li>
						<li><h3>Components</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
								<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
								<li><a href="colors.html" class="slide-item"> Colors</a></li>
								<li><a href="cards.html" class="slide-item"> Cards design</a></li>
								<li><a href="cards-image.html" class="slide-item"> Image  Cards design</a></li>
								<li><a href="avatars.html" class="slide-item"> Avatars</a></li>
								<li><a href="dropdown.html" class="slide-item">Dropdowns</a></li>
								<li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
								<li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
								<li><a href="list.html" class="slide-item"> List</a></li>
								<li><a href="tags.html" class="slide-item"> Tags</a></li>
								<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
								<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
								<li><a href="typography.html" class="slide-item"> Typography</a></li>
								<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
								<li><a href="badge.html" class="slide-item"> Badges</a></li>
								<li><a href="jumbotron.html" class="slide-item"> Jumbotron</a></li>
								<li><a href="panels.html" class="slide-item"> Panels</a></li>
								<li><a href="modal.html" class="slide-item"> Modal</a></li>
								<li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
								<li><a href="progress.html" class="slide-item"> Progress</a></li>
								<li><a href="carousel.html" class="slide-item"> Carousels</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-calendar"></i><span class="side-menu__label">Calendar</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="calendar.html" class="slide-item">Default calendar</a></li>
								<li><a href="calendar2.html" class="slide-item">Full calendar</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Advanced UI</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chat.html" class="slide-item"> Default Chat</a></li>
								<li><a href="notify.html" class="slide-item"> Notifications</a></li>
								<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
								<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
								<li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
								<li><a href="counters.html" class="slide-item">Counters</a></li>
								<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
								<li><a href="time-line.html" class="slide-item"> Time Line</a></li>
								<li><a href="rating.html" class="slide-item"> Rating</a></li>
								<li><a href="accordion.html" class="slide-item"> Accordions</a></li>
								<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
								<li><a href="footers.html" class="slide-item">Footers</a></li>
								<li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
								<li><a href="users-list.html" class="slide-item"> User List</a></li>
								<li><a href="search.html" class="slide-item"> Search page</a></li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="maps.html"><i class="side-menu__icon fe fe-map-pin"></i><span class="side-menu__label">Maps</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-compass"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
								<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
								<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
								<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
								<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
								<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
								<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
								<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
								<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
								<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
							</ul>
						</li>
						<li><h3>Pages</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-briefcase"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
								<li><a href="email.html" class="slide-item"> Email</a></li>
								<li><a href="emailservices.html" class="slide-item"> Email Inbox</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="about.html" class="slide-item"> About Company</a></li>
								<li><a href="services.html" class="slide-item"> Services</a></li>
								<li><a href="faq.html" class="slide-item"> FAQS</a></li>
								<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
								<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
								<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
								<li><a href="blog.html" class="slide-item"> Blog</a></li>
								<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
								<li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="product.html" class="slide-item"> Products</a></li>
								<li><a href="product-details.html" class="slide-item">Product Details</a></li>
								<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-unlock"></i><span class="side-menu__label">Custom</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-alert-triangle"></i><span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="400.html" class="slide-item"> 400 Error</a></li>
								<li><a href="401.html" class="slide-item"> 401 Error</a></li>
								<li><a href="403.html" class="slide-item"> 403 Error</a></li>
								<li><a href="404.html" class="slide-item"> 404 Error</a></li>
								<li><a href="500.html" class="slide-item"> 500 Error</a></li>
								<li><a href="503.html" class="slide-item"> 503 Error</a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--sidemenu end-->

                <!-- app-content-->
				<div class="app-content toggle-content">
					<div class="side-app">

					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Blog</h1>
							<div class="ml-auto">
								<div class="input-group">
									<a  class="btn btn-primary btn-icon text-white mr-2"  id="daterange-btn" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Calendar">
										<span>
											<i class="fe fe-calendar"></i>
										</span>
									</a>
									<a href="#" class="btn btn-secondary btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fe fe-star"></i>
										</span>
									</a>
									<a href="#" class="btn btn-success btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Email">
										<span>
											<i class="fe fe-mail"></i>
										</span>
									</a>
									<a href="#" class="btn btn-warning btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Chat">
										<span>
											<i class="fe fe-message-square"></i>
										</span>
									</a>
									<a href="#" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Add New">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Support">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!-- End page-header -->

						@yield('content')
					</div>

					<!-- Right-sidebar-->
					<div class="sidebar sidebar-right sidebar-animate">
						<div class="tab-menu-heading siderbar-tabs border-0">
							<div class="tabs-menu ">
								<!-- Tabs -->
								<ul class="nav panel-tabs">
									<li class=""><a href="#tab1" class="active" data-toggle="tab">Chat</a></li>
									<li><a href="#tab2" data-toggle="tab">Activity</a></li>
									<li><a href="#tab3" data-toggle="tab">Todo</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
							<div class="tab-content border-top">
								<div class="tab-pane active" id="tab1">
									<div class="chat">
										<div class="contacts_card">
											<div class="input-group p-3">
												<input type="text" placeholder="Search..." class="form-control search">
												<div class="input-group-prepend">
													<span class="input-group-text search_btn  "><i class="fa fa-search"></i></span>
												</div>
											</div>
											<ul class="contacts mb-0">
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/male/3.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
															<small class="text-muted">Maryam is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/female/1.jpg" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Sahar Darya</h6>
															<small class="text-muted">Sahar left 7 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/female/9.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
															<small class="text-muted">Maryam is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/female/10.jpg" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Yolduz Rafi</h6>
															<small class="text-muted">Yolduz is online</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/male/5.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Nargis Hawa</h6>
															<small class="text-muted">Nargis left 30 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/male/7.jpg" class="rounded-circle user_img" alt="img">
															<span class="online_icon"></span>
														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
															<small class="text-muted">Khadija left 50 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
													</div>
												</li>
												<li>
													<div class="d-flex bd-highlight">
														<div class="img_cont">
															<img src="../../assets/images/users/female/8.jpg" class="rounded-circle user_img" alt="img">

														</div>
														<div class="user_info">
															<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
															<small class="text-muted">Khadija left 50 mins ago</small>
														</div>
														<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-02-2019</small></div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane  " id="tab2">
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-primary brround avatar-md">CH</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>New Websites is Created</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">30 mins ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-danger brround avatar-md">N</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare For the Next Project</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-info brround avatar-md">S</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Decide the live Discussion Time</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">3 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-warning brround avatar-md">K</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Team Review meeting at yesterday at 3:00 pm</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">4 hours ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-success brround avatar-md">R</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center  border-bottom p-4">
										<div class="">
											<span class="avatar bg-pink brround avatar-md">MS</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">1 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center border-bottom p-4">
										<div class="">
											<span class="avatar bg-purple brround avatar-md">L</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">45 mintues ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
									<div class="list d-flex align-items-center p-4">
										<div class="">
											<span class="avatar bg-blue brround avatar-md">U</span>
										</div>
										<div class="wrapper w-100 ml-3">
											<p class="mb-0 d-flex">
												<b>Prepare for Presentation</b>
											</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center">
													<i class="mdi mdi-clock text-muted mr-1"></i>
													<small class="text-muted ml-auto">2 days ago</small>
													<p class="mb-0"></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab3">
									<div class="">
										<div class="d-flex p-3">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
												<span class="custom-control-label">Do Even More..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2" checked="">
												<span class="custom-control-label">Find an idea.</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
												<span class="custom-control-label">Hangout with friends</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" >
												<span class="custom-control-label">Do Something else</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox5" value="option5" >
												<span class="custom-control-label">Eat healthy, Eat Fresh..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox6" value="option6" checked="">
												<span class="custom-control-label">Finsh something more..</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox7" value="option7" checked="">
												<span class="custom-control-label">Do something more</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox8" value="option8" >
												<span class="custom-control-label">Updated more files</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox9" value="option9" >
												<span class="custom-control-label">System updated</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="d-flex p-3 border-top border-bottom">
											<label class="custom-control custom-checkbox mb-0">
												<input type="checkbox" class="custom-control-input" name="example-checkbox10" value="option10" >
												<span class="custom-control-label">Settings Changings...</span>
											</label>
											<span class="ml-auto">
												<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title=""  data-placement="top" data-original-title="Edit"></i>
												<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
											</span>
										</div>
										<div class="text-center pt-5">
											<a href="#" class="btn btn-primary">Upgrade more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Rightsidebar-->

				</div>
				<!-- End app-content-->

				<!--Footer-->
				<footer class="footer side-footer">
					<div class="container">
						<div class="row align-items-center flex-row-reverse">
							<div class="col-lg-12 col-sm-12   text-center">
								Copyright © 2019 <a href="#">IndoUi</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.
							</div>
						</div>
					</div>
				</footer>
				<!-- End Footer-->

			</div>
		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ mix('/js/jquery-3.4.1.min.js') }}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ mix('/plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ mix('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--Jquery Sparkline js-->
		<script src="{{ mix('/js/jquery.sparkline.min.js') }}"></script>

		<!-- Chart Circle js-->
		<script src="{{ mix('/js/circle-progress.min.js') }}"></script>

		<!-- Star Rating js-->
		<script src="{{ mix('/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Moment js-->
		<script src="{{ mix('/plugins/moment/moment.min.js') }}"></script>

		<!-- Daterangepicker js-->
		<script src="{{ mix('/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

		<!--Side-menu js-->
		<script src="{{ mix('/plugins/sidemenu/sidemenu.js') }}"></script>

		<!--Time Counter js-->
		<script src="{{ mix('/plugins/counters/jquery.missofis-countdown.js') }}"></script>
		<script src="{{ mix('/plugins/counters/counter.js') }}"></script>

		<!-- P-scrollbar js-->
		<script src="{{ mix('/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
		<script src="{{ mix('/plugins/p-scrollbar/p-scrollbar-leftmenu.js') }}"></script>

		<!-- Rightsidebar js -->
		<script src="{{ mix('/plugins/sidebar/sidebar.js') }}"></script>

		<!-- Custom js-->
		<script src="{{ mix('/js/custom.js') }}"></script>

	</body>
</html>