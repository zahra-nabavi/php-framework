<!DOCTYPE html>
<html lang="fa">
<head>
    <?php view('front/head'); ?>
</head>

<body class="boxed-layout">

	<div class="body-inner">

	<?php view('front/top-bar');?>

		<!-- Header start -->
		<header id="header" class="header header-menu">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-md-3">
						<div class="logo">
							<a href="index.html">
								<img src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/logos/logo.png" alt="">
							</a>
						</div>
					</div><!-- logo col end -->

					<div class="col-xs-12 col-md-7">
						<nav class="site-navigation navigation">
							<div class="site-nav-inner">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">تغییر وضعیت ناوبری</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
										<li class="dropdown active">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">خانه <i class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="index.html">خانه 1</a></li>
												<li><a href="index-2.html">خانه 2</a></li>
												<li><a href="index-3.html">خانه 3</a></li>
												<li><a href="index-4.html">خانه 4</a></li>
												<li class="active"><a href="index-5.html">خانه 5</a></li>
											</ul>
										</li>

										<li class="dropdown mega-dropdown">
											<a href="category-style1.html" class="dropdown-toggle">سبک زندگی <i class="fa fa-angle-down"></i></a>
											<div class="dropdown-menu mega-menu-content hidden-xs hidden-sm clearfix">
												<div class="menu-tab">
													<ul class="nav nav-tabs nav-stacked col-md-2" data-toggle="tab-hover">
														<li class="active">
															<a class="animated fadeIn" href="#tab-A" data-toggle="tab">
																<span class="tab-head">
																	<span class="tab-text-title">سلامتی</span>					
																</span>
															</a>
														</li>
														<li>
															<a class="animated fadeIn" href="#tab-B" data-toggle="tab">
																<span class="tab-head">
																	<span class="tab-text-title">مسافرت</span>					
																</span>
															</a>
														</li>
														<li>
															<a class="animated fadeIn" href="#tab-C" data-toggle="tab">
																<span class="tab-head">
																	<span class="tab-text-title">غذا</span>					
																</span>
															</a>
														</li>
														<li>
															<a class="animated fadeIn" href="#tab-D" data-toggle="tab">
																<span class="tab-head">
																	<span class="tab-text-title">معماری</span>					
																</span>
															</a>
														</li>
													</ul>

													<div class="tab-content col-md-10">
														<div class="tab-pane active animated fadeIn" id="tab-A">
															<div class="row">
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health1.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">سلامتی</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 1 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health2.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">سلامتی</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 2 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health3.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">سلامتی</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 3 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health4.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">سلامتی</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 4 end -->
															</div><!-- Post block row end -->
														</div><!-- Tab pane 1 end -->

														<div class="tab-pane animated fadeIn" id="tab-B">
															<div class="row">
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel1.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">مسافرت</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 1 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel2.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">مسافرت</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 2 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel3.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">مسافرت</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 3 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel4.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">مسافرت</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 4 end -->
															</div><!-- Post block row end -->

														</div><!-- Tab pane 2 end -->

														<div class="tab-pane animated fadeIn" id="tab-C">
															<div class="row">
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/food1.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">غذا</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 1 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/food2.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">غذا</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 2 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/food3.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">غذا</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 3 end -->
																<div class="col-md-3">
																	<div class="post-block-style clearfix">
																		<div class="post-thumb">
																			<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/food4.jpg" alt=""></a>
																		</div>
																		<a class="post-cat" href="#">غذا</a>
																		<div class="post-content">
																			<h2 class="post-title title-small">
																				<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
																			</h2>
																		</div><!-- Post content end -->
																	</div><!-- Post Block style end -->
																</div><!-- Col 4 end -->
															</div><!-- Post block row end -->
														</div><!-- Tab pane 3 end -->

													</div><!-- tab content -->
												</div><!-- Menu tab end -->
											</div><!-- Mega menu end -->
										</li><!-- Tab menu end -->

										<li>
											<a href="category-style2.html">تکنولوژی</a>
										</li>

										<li class="dropdown mega-dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">ویدئو <i class="fa fa-angle-down"></i></a>
											<div class="dropdown-menu mega-menu-content hidden-xs hidden-sm clearfix">
												<div class="mega-menu-content-inner">
													<div class="row">
														<div class="col-md-3">
															<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video4.jpg" alt="">
																	<a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&loop=1">
																		<div class="video-icon">
																			<i class="fa fa-play"></i>
																		</div>
																	</a>
																</div><!-- Post thumb end -->
																<div class="post-content">
																	<h2 class="post-title title-small">
																		<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
																	</h2>
																</div><!-- Post content end -->
															</div><!-- Post Block style end -->
														</div><!-- Col 1 end -->

														<div class="col-md-3">
															<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video3.jpg" alt="">
																	<a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&loop=1">
																		<div class="video-icon">
																			<i class="fa fa-play"></i>
																		</div>
																	</a>
																</div><!-- Post thumb end -->
																<div class="post-content">
																	<h2 class="post-title title-small">
																		<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
																	</h2>
																</div><!-- Post content end -->
															</div><!-- Post Block style end -->
														</div><!-- Col 2 end -->

														<div class="col-md-3">
															<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video2.jpg" alt="">
																	<a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&loop=1">
																		<div class="video-icon">
																			<i class="fa fa-play"></i>
																		</div>
																	</a>
																</div><!-- Post thumb end -->
																<div class="post-content">
																	<h2 class="post-title title-small">
																		<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
																	</h2>
																</div><!-- Post content end -->
															</div><!-- Post Block style end -->
														</div><!-- Col 3 end -->
														<div class="col-md-3">
															<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video1.jpg" alt="">
																	<a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&loop=1">
																		<div class="video-icon">
																			<i class="fa fa-play"></i>
																		</div>
																	</a>
																</div><!-- Post thumb end -->
																<div class="post-content">
																	<h2 class="post-title title-small">
																		<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
																	</h2>
																</div><!-- Post content end -->
															</div><!-- Post Block style end -->
														</div><!-- Col 4 end -->
													</div><!-- Post block row end -->
												</div> 

											</div><!-- Mega menu content end -->
										</li><!-- Video menu end -->

										<li>
											<a href="category-style4.html">مسافرت</a>
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">ویژگی ها <i class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li class="dropdown-submenu">
													<a href="#.">طرح های دسته ها</a>
													<ul class="dropdown-menu">
														<li><a href="category-style1.html">طرح دسته 1</a></li>
														<li><a href="category-style2.html">طرح دسته 2</a></li>
														<li><a href="category-style3.html">طرح دسته 3</a></li>
														<li><a href="category-style4.html">طرح دسته 4</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="#.">طرح های مطالب</a>
													<ul class="dropdown-menu">
														<li><a href="single-post1.html">طرح مطلب 1</a></li>
														<li><a href="single-post2.html">طرح مطلب 2</a></li>
														<li><a href="single-post3.html">طرح مطلب 3</a></li>
														<li><a href="single-post4.html">طرح مطلب 4</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="#.">نوار کناری</a>
													<ul class="dropdown-menu">
														<li><a href="right-sidebar.html">نوار کناری سمت راست</a></li>
														<li><a href="single-post1.html">نوار کناری سمت چپ</a></li>
														<li><a href="no-sidebar.html">بدون نوار کناری</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="#.">کدهای کوتاه</a>
													<ul class="dropdown-menu">
														<li><a href="typography.html">تایپوگرافی</a></li>
														<li><a href="blockquote.html">نقل قول ها</a></li>
														<li><a href="tabs.html">تب ها</a></li>
													</ul>
												</li>
												<li class="dropdown-submenu">
													<a href="#.">صفحات</a>
													<ul class="dropdown-menu">
														<li><a href="author.html">نویسنده</a></li>
														<li><a href="404.html">404</a></li>
														<li><a href="contact.html">تماس</a></li>
													</ul>
												</li>
											</ul><!-- End dropdown -->
										</li><!-- Features menu end -->


									</ul><!--/ Nav ul end -->
								</div><!--/ Collapse end -->

							</div><!-- Site Navbar inner end -->
						</nav><!--/ Navigation end -->
					</div><!-- Header with Menu -->

					<div class="search-area col-xs-12 col-md-2">
						<div class="nav-search">
							<span id="search"><i class="fa fa-search"></i></span>
						</div><!-- Search end -->

						<div class="search-block" style="display: none;">
							<input type="text" class="form-control" placeholder="عبارت را وارد نموده و اینتر بزنید">
							<span class="search-close">×</span>
						</div><!-- Site search end -->
					</div>

				</div><!-- Row end -->
			</div><!-- Logo and banner area end -->
		</header><!--/ Header end -->


		<div class="trending-light hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="trending-title">خبرهای داغ</h3>
						<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
							<div class="item">
								<div class="post-content">
									<h2 class="post-title title-small">
										<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Item 1 end -->
							<div class="item">
								<div class="post-content">
									<h2 class="post-title title-small">
										<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Item 2 end -->
							<div class="item">
								<div class="post-content">
									<h2 class="post-title title-small">
										<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Item 3 end -->
						</div><!-- Carousel end -->
					</div><!-- Col end -->
				</div><!--/ Row end -->
			</div><!--/ Container end -->
		</div><!--/ Trending end -->

		<section class="featured-post-area no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-12 pad-r">
						<div id="featured-slider" class="owl-carousel owl-theme featured-slider content-bottom">
							<div class="item" style="background-image:url(<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health5.jpg)">
								<div class="featured-post">
									<div class="post-content">
										<a class="post-cat" href="#">سلامتی</a>
										<h2 class="post-title title-extra-large">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</a>
										</h2>
										<span class="post-date">16 دی 1396</span>
									</div>
								</div><!--/ Featured post end -->

							</div><!-- Item 1 end -->

							<div class="item" style="background-image:url(<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget2.jpg)">
								<div class="featured-post">
									<div class="post-content">
										<a class="post-cat" href="#">ابزار</a>
										<h2 class="post-title title-extra-large">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
										</h2>
										<span class="post-date">16 دی 1396</span>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Item 2 end -->

							<div class="item" style="background-image:url(<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel5.jpg)">
								<div class="featured-post">
									<div class="post-content">
										<a class="post-cat" href="#">مسافرت</a>
										<h2 class="post-title title-extra-large">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
										</h2>
										<span class="post-date">16 دی 1396</span>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Item 3 end -->
						</div><!-- Featured owl carousel end-->
					</div><!-- Col 7 end -->

					<div class="col-md-5 col-xs-12 pad-l">
						<div class="row">
							<div class="col-sm-12">
								<div class="post-overaly-style hot-post-top clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget2.jpg" alt=""></a>
									</div>
									<div class="post-content">
										<a class="post-cat" href="#">ابزار</a>
										<h2 class="post-title title-large">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
										</h2>
									</div><!-- Post content end -->
								</div><!-- Post Overaly end -->
							</div><!-- Col end -->

							<div class="col-sm-6 pad-r-small">
								<div class="post-overaly-style hot-post-bottom clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel2.jpg" alt=""></a>
									</div>
									<div class="post-content">
										<a class="post-cat" href="#">مسافرت</a>
										<h2 class="post-title title-medium">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
										</h2>
									</div><!-- Post content end -->
								</div><!-- Post Overaly end -->
							</div><!-- Col end -->

							<div class="col-sm-6 pad-l-small">
								<div class="post-overaly-style hot-post-bottom clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health1.jpg" alt=""></a>
									</div>
									<div class="post-content">
										<a class="post-cat" href="#">سلامتی</a>
										<h2 class="post-title title-medium">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
										</h2>
									</div><!-- Post content end -->
								</div><!-- Post Overaly end -->
							</div><!-- Col end -->
						</div>
					</div><!-- Col 5 end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- Trending post end -->

		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

						<div class="block color-blue">
							<h3 class="block-title"><span>تکنولوژی</span></h3>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="post-block-style clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget1.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">گجت ها</a>
										<div class="post-content">
											<h2 class="post-title title-medium">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">24 تیر 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style end -->
								</div><!-- Col end -->

								<div class="col-md-6 col-sm-6">
									<div class="list-post-block m-top-0">
										<ul class="list-post">
											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/game4.jpg" alt="">
														</a>
														<a class="post-cat" href="#">بازی ها</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">25 فروردین 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 1 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/robot1.jpg" alt="">
														</a>
														<a class="post-cat" href="#">رباتیک</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">18 بهمن 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 2 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget3.jpg" alt="">
														</a>
														<a class="post-cat" href="#">گجت ها</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">30 فروردین 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 3 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget5.jpg" alt="">
														</a>
														<a class="post-cat" href="#">بازی ها</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">27 خرداد 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 4 end -->
										</ul><!-- List post end -->
									</div><!-- List post block end -->
								</div><!-- List post Col end -->
							</div><!-- Row end -->
						</div><!-- Technology block end -->

						<div class="gap-40"></div>

						<div class="block color-orange">
							<h3 class="block-title"><span>سبک زندگی</span></h3>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="post-block-style clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/food2.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">غذا</a>
										<div class="post-content">
											<h2 class="post-title title-medium">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">24 تیر 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style end -->
								</div><!-- Col end -->

								<div class="col-md-6 col-sm-6">
									<div class="list-post-block m-top-0">
										<ul class="list-post">
											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel2.jpg" alt="">
														</a>
														<a class="post-cat" href="#">مسافرت</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">25 فروردین 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 1 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health2.jpg" alt="">
														</a>
														<a class="post-cat" href="#">سلامتی</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">18 بهمن 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 2 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health4.jpg" alt="">
														</a>
														<a class="post-cat" href="#">سلامتی</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">30 فروردین 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 3 end -->

											<li class="clearfix">
												<div class="post-block-style post-float clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/architecture4.jpg" alt="">
														</a>
														<a class="post-cat" href="#">معماری</a>
													</div><!-- Post thumb end -->

													<div class="post-content">
														<h2 class="post-title title-small">
															<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
														</h2>
														<div class="post-meta">
															<span class="post-date">27 خرداد 1396</span>
														</div>
													</div><!-- Post content end -->
												</div><!-- Post block style end -->
											</li><!-- Li 4 end -->
										</ul><!-- List post end -->
									</div><!-- List post block end -->
								</div><!-- List post Col end -->
							</div><!-- Row end -->
						</div><!-- Lifestyle block end -->


					</div><!-- Content Col end -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="sidebar sidebar-right">
							<div class="widget">

								<ul class="social-icon-box unstyled">
									<li class="rss">
										<a href="#"><i class="fa fa-rss"></i> 
											<span class="ts-social-title">RSS</span>
											<span class="ts-social-desc">لورم ایپسوم متن ساختگی</span></a>
									</li>

									<li class="facebook">
										<a href="#"><i class="fa fa-rss"></i> 
											<span class="ts-social-title">فیسبوک</span>
											<span class="ts-social-desc">لورم ایپسوم متن ساختگی</span></a>
									</li>

									<li class="twitter">
										<a href="#"><i class="fa fa-twitter"></i> 
											<span class="ts-social-title">توییتر</span>
											<span class="ts-social-desc">لورم ایپسوم متن ساختگی</span></a>
									</li>

									<li class="gplus">
										<a href="#"><i class="fa fa-google-plus"></i> 
											<span class="ts-social-title">گوگل پلاس</span>
											<span class="ts-social-desc">لورم ایپسوم متن ساختگی</span></a>
									</li>
								</ul>
							</div><!-- Widget Social box end -->

							<div class="widget color-default m-bottom-0">
								<h3 class="block-title"><span>لورم ایپسوم متن</span></h3>

								<div id="post-slide" class="owl-carousel owl-theme post-slide">
									<div class="item">
										<div class="post-overaly-style text-center clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget1.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<a class="post-cat" href="#">گجت ها</a>
												<h2 class="post-title">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">2 شهریور 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post Overaly Article 1 end -->

										<div class="post-overaly-style text-center clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video1.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<a class="post-cat" href="#">ویدئو</a>
												<h2 class="post-title">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">12 مرداد 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post Overaly Article 2 end -->

									</div><!-- Item 1 end -->

									<div class="item">

										<div class="post-overaly-style text-center clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health5.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<a class="post-cat" href="#">سلامتی</a>
												<h2 class="post-title">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">2 شهریور 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post Overaly Article 3 end -->

										<div class="post-overaly-style text-center clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/robot1.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<a class="post-cat" href="#">رباتیک</a>
												<h2 class="post-title">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">لورم ایپسوم متن</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post Overaly Article 4 end -->

									</div><!-- Item 2 end -->

								</div><!-- Post slide carousel end -->

							</div><!-- Trending news end -->

						</div><!-- Sidebar right end -->
					</div><!-- Sidebar Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- First block end -->

		<section class="block-wrapper p-top-0">
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<div class="block color-dark-blue">
							<h3 class="block-title"><span>مسافرت</span></h3>
							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel1.jpg" alt="">
									</a>
								</div>

								<div class="post-content">
									<h2 class="post-title">
										<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
									</h2>
									<div class="post-meta">
										<span class="post-date">3 فروردین 1396</span>
									</div>
								</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->

							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel2.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">15 آذر 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel3.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">18 بهمن 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/travel4.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">30 فروردین 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->
								</ul><!-- List post end -->
							</div><!-- List post block end -->
						</div><!-- Block end -->
					</div><!-- Travel Col end -->

					<div class="col-md-4">
						<div class="block color-aqua">
							<h3 class="block-title"><span>گجت ها</span></h3>
							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget1.jpg" alt="">
									</a>
								</div>

								<div class="post-content">
									<h2 class="post-title">
										<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
									</h2>
									<div class="post-meta">
										<span class="post-date">3 فروردین 1396</span>
									</div>
								</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->

							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget2.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">13 فروردین 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget3.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">11 اسفند 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/gadget4.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">30 فروردین 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->
								</ul><!-- List post end -->
							</div><!-- List post block end -->
						</div><!-- Block end -->
					</div><!-- Gadget Col end -->

					<div class="col-md-4">
						<div class="block color-violet">
							<h3 class="block-title"><span>سلامتی</span></h3>
							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health1.jpg" alt="">
									</a>
								</div>

								<div class="post-content">
									<h2 class="post-title">
										<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
									</h2>
									<div class="post-meta">
										<span class="post-date">3 فروردین 1396</span>
									</div>
								</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->

							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health2.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">15 آذر 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health3.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">18 بهمن 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/health4.jpg" alt="">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
												<h2 class="post-title title-small">
													<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
												</h2>
												<div class="post-meta">
													<span class="post-date">30 فروردین 1396</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->
								</ul><!-- List post end -->
							</div><!-- List post block end -->
						</div><!-- Block end -->
					</div><!-- Health Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- 2nd block end -->


		<section class="block-wrapper video-block">
			<div class="container">
				<div class="row">
					<div class="video-tab clearfix">
						<h2 class="video-tab-title">تماشا کنید</h2>
						<div class="col-md-7 pad-r-0">
							<div class="tab-content">
								<div class="tab-pane active animated fadeIn" id="video1">
									<div class="post-overaly-style clearfix">
										<div class="post-thumb">
											<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video4.jpg" alt="">
											<a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&loop=1">
												<div class="video-icon">
													<i class="fa fa-play"></i>
												</div>
											</a>
										</div><!-- Post thumb end -->
										<div class="post-content">
											<a class="post-cat" href="#">ویدئو</a>
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</a>
											</h2>
										</div><!-- Post content end -->
									</div><!-- Post Overaly Article end -->
								</div><!--Tab pane 1 end-->

								<div class="tab-pane animated fadeIn" id="video2">
									<div class="post-overaly-style clearfix">
										<div class="post-thumb">
											<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video3.jpg" alt="">
											<a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&loop=1">
												<div class="video-icon">
													<i class="fa fa-play"></i>
												</div>
											</a>
										</div><!-- Post thumb end -->
										<div class="post-content">
											<a class="post-cat" href="#">ویدئو</a>
											<h2 class="post-title title-medium">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
											</h2>
										</div><!-- Post content end -->
									</div><!-- Post Overaly Article 2 end -->
								</div><!--Tab pane 2 end-->

								<div class="tab-pane animated fadeIn" id="video3">
									<div class="post-overaly-style clearfix">
										<div class="post-thumb">
											<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video2.jpg" alt="">
											<a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&loop=1">
												<div class="video-icon">
													<i class="fa fa-play"></i>
												</div>
											</a>
										</div><!-- Post thumb end -->
										<div class="post-content">
											<a class="post-cat" href="#">ویدئو</a>
											<h2 class="post-title title-medium">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
											</h2>
										</div><!-- Post content end -->
									</div><!-- Post Overaly Article 2 end -->
								</div><!--Tab pane 2 end-->


							</div><!-- Tab content end -->
						</div><!--Tab col end -->

						<div class="col-md-5 pad-l-0">
							<ul class="nav nav-tabs">
								<li class="active">
									<a class="animated fadeIn" href="#video1" data-toggle="tab">
										<div class="post-thumb">
											<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video4.jpg" alt="">
										</div><!-- Post thumb end -->
										<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</h3>
									</a>
								</li>
								<li>
									<a class="animated fadeIn" href="#video2" data-toggle="tab">
										<div class="post-thumb">
											<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video3.jpg" alt="">
										</div><!-- Post thumb end -->
										<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</h3>
									</a>
								</li>
								<li>
									<a class="animated fadeIn" href="#video3" data-toggle="tab">
										<div class="post-thumb">
											<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video2.jpg" alt="">
										</div><!-- Post thumb end -->
										<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</h3>
									</a>
								</li>
							</ul>
						</div><!--Tab nav col end -->
					</div><!-- Video tab end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- Video block end -->


		<section class="block-wrapper p-bottom-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="more-news block color-default">
							<h3 class="block-title"><span>خبرهای بیشتر</span></h3>

							<div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
								<div class="item">
									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video1.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">ویدئو</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">29 خرداد 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 1 end -->

									<div class="gap-30"></div>

									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/game5.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">بازی ها</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">27 اسفند 1395</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 2 end -->

									<div class="gap-30"></div>

									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/game4.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">بازی ها</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">24 تیر 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 3 end -->

									<div class="gap-30"></div>

									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/robot5.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">رباتیک</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">24 تیر 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 4 end -->
								</div><!-- Item 1 end -->

								<div class="item">
									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video2.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">ویدئو</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">29 خرداد 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 5 end -->

									<div class="gap-30"></div>

									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/video/video3.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">ویدئو</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">31 تیر 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 6 end -->

									<div class="gap-30"></div>

									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/lifestyle/architecture1.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">معماری</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">23 مرداد 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 7 end -->

									<div class="gap-30"></div>

									<div class="post-block-style post-float-half clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/tech/game1.jpg" alt="">
											</a>
										</div>
										<a class="post-cat" href="#">رباتیک</a>
										<div class="post-content">
											<h2 class="post-title">
												<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
											</h2>
											<div class="post-meta">
												<span class="post-author"><a href="#">جان اسنو</a></span>
												<span class="post-date">24 تیر 1396</span>
											</div>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم</p>
										</div><!-- Post content end -->
									</div><!-- Post Block style 8 end -->
								</div><!-- Item 2 end -->

							</div><!-- More news carousel end -->
						</div><!--More news block end -->
					</div><!-- Content Col end -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="sidebar sidebar-right">

							<div class="widget color-default">
								<h3 class="block-title"><span>جدیدترین نقد و بررسی ها</span></h3>
								<div class="list-post-block">
									<ul class="list-post review-post-list">
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/review/review1.jpg" alt="">
													</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
													</h2>
													<div class="post-meta">
														<div class="review-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div><!-- Post meta end -->
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/review/review2.jpg" alt="">
													</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>
													</h2>
													<div class="post-meta">
														<div class="review-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 2 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/review/review3.jpg" alt="">
													</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
													</h2>
													<div class="post-meta">
														<div class="review-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 3 end -->

										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/news/review/review4.jpg" alt="">
													</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
													</h2>
													<div class="post-meta">
														<div class="review-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 4 end -->

									</ul><!-- List post end -->
								</div><!-- List post block end -->
							</div><!-- Latest Review Widget end -->

							<div class="widget m-bottom-0">
								<h3 class="block-title"><span>خبرنامه</span></h3>
								<div class="ts-newsletter">
									<div class="newsletter-introtext">
										<h4>به روز باشید</h4>
										<p>با عضویت در خبرنامه جدیدترین اخبار را در ایمیل خود دریافت کنید!</p>
									</div>

									<div class="newsletter-form">
										<form action="#" method="post">
											<div class="form-group">
												<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="ایمیل" autocomplete="off">
												<button class="btn btn-primary">عضویت</button>
											</div>
										</form>
									</div>
								</div><!-- Newsletter end -->
							</div><!-- Newsletter widget end -->
						</div><!--Sidebar right end -->
					</div><!-- Sidebar col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- 3rd block end -->

		<section class="ad-content-area text-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<img class="img-responsive" src="<?php  baseURL('third-party/thems/news/Theme/images') ?>/banner-ads/ad-content-two.png" alt="">
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- Ad content two end -->

        <?php  view('front/footer'); ?>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>تمامی حقوق برای این وب سایت محفوظ است</span>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">قوانین سایت</a></li>
								<li><a href="#">حریم شخصی</a></li>
								<li><a href="#">تبلیغات</a></li>
								<li><a href="#">قوانین کوکی ها</a></li>
								<li><a href="#">تماس با ما</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
		</div><!-- Copyright end -->

        <?php  view('front/scripts');?>
		<!-- Javascript Files  -->



	</div><!-- Body inner end -->
</body>
</html>