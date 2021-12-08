<!DOCTYPE html>
<html lang="fa">
<head>
    <?php view('front/head'); ?>
</head>

<body>

	<div class="body-inner">

		<!-- <div class="preload"></div> -->

		<div class="trending-bar hidden-xs">
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

        <?php view('front/top-bar');?>

		<!-- Header start -->
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div class="logo">
							<a href="index.html">
								<img src="<?php baseURL('third-party/thems/news/theme/images')?>/logos/logo.png" alt="">
							</a>
						</div>
					</div><!-- logo col end -->

					<div class="col-xs-12 col-sm-9 col-md-9 header-right">
						<div class="ad-banner pull-right">
							<a href="#"><img src="<?php baseURL('third-party/thems/news/theme/images')?>/banner-ads/ad-top-header.png" class="img-responsive" alt=""></a>
						</div>
					</div><!-- header right end -->
				</div><!-- Row end -->
			</div><!-- Logo and banner area end -->
		</header><!--/ Header end -->

		<div class="main-nav clearfix">
			<div class="container">
				<div class="row">
					<nav class="site-navigation navigation">
						<div class="site-nav-inner pull-left">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">تغییر وضعیت ناوبری</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="collapse navbar-collapse navbar-responsive-collapse">
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">خانه <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="index.html">خانه 1</a></li>
											<li><a href="index-2.html">خانه 2</a></li>
											<li><a href="index-3.html">خانه 3</a></li>
											<li><a href="index-4.html">خانه 4</a></li>
											<li><a href="index-5.html">خانه 5</a></li>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/health1.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/health2.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/health3.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/health4.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/travel1.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/travel2.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/travel3.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/travel4.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/food1.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/food2.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/food3.jpg" alt=""></a>
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
																		<a href="#"><img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/food4.jpg" alt=""></a>
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
																<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/video/video4.jpg" alt="">
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
																<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/video/video3.jpg" alt="">
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
																<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/video/video2.jpg" alt="">
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
																<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/video/video1.jpg" alt="">
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

									<li class="dropdown active">
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
											<li class="dropdown-submenu active">
												<a href="#.">صفحات</a>
												<ul class="dropdown-menu">
													<li><a href="author.html">نویسنده</a></li>
													<li><a href="404.html">404</a></li>
													<li class="active"><a href="contact.html">تماس</a></li>
												</ul>
											</li>
										</ul><!-- End dropdown -->
									</li><!-- Features menu end -->


								</ul><!--/ Nav ul end -->
							</div><!--/ Collapse end -->

						</div><!-- Site Navbar inner end -->
					</nav><!--/ Navigation end -->

					<div class="nav-search">
						<span id="search"><i class="fa fa-search"></i></span>
					</div><!-- Search end -->

					<div class="search-block" style="display: none;">
						<input type="text" class="form-control" placeholder="عبارت را وارد نموده و اینتر بزنید">
						<span class="search-close">×</span>
					</div><!-- Site search end -->

				</div><!--/ Row end -->
			</div><!--/ Container end -->

		</div><!-- Menu wrapper end -->

		<div class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ol class="breadcrumb">
							<li><a href="#">خانه</a></li>
							<li><a href="#">ویژگی ها</a></li>
							<li>تماس</li>
						</ol>
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Page title end -->

		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

						<h3>تماس با ما</h3>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده</p>

						<div class="widget contact-info">

							<div class="contact-info-box">
								<div class="contact-info-box-content">
									<h4>آدرس ما</h4>
									<p>تبریز، نصف راه، جنب بانک ملی، پلاک 456، طبقه 87</p>
								</div>
							</div>

							<div class="contact-info-box">
								<div class="contact-info-box-content">
									<h4>به ما ایمیل بزنید</h4>
									<p>info@sample.com</p>
								</div>
							</div>

							<div class="contact-info-box">
								<div class="contact-info-box-content">
									<h4>با ما تماس بگیرید</h4>
									<p><span class="ltr_text">+98 912 345 67 89</span></p>
								</div>
							</div>

						</div><!-- Widget end -->

						<h3>فرم تماس</h3>
						<form id="contact-form" action="contact-form.php" method="post" role="form">
							<div class="error-container"></div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>نام</label>
										<input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>ایمیل</label>
										<input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>موضوع</label>
										<input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>پیام</label>
								<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
							</div>
							<div class="text-right"><br>
								<button class="btn btn-primary solid blank" type="submit">ارسال پیام</button>
							</div>
						</form>



					</div><!-- Content Col end -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="sidebar sidebar-right">
							<div class="widget">
								<h3 class="block-title"><span>ما را دنبال کنید</span></h3>

								<ul class="social-icon">
									<li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div><!-- Widget Social end -->

							<div class="widget color-default">
								<h3 class="block-title"><span>اخبار پربازدید</span></h3>

								<div class="post-overaly-style clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/health4.jpg" alt="">
										</a>
									</div>

									<div class="post-content">
										<a class="post-cat" href="#">سلامتی</a>
										<h2 class="post-title title-small">
											<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
										</h2>
										<div class="post-meta">
											<span class="post-date">2 شهریور 1396</span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->


								<div class="list-post-block">
									<ul class="list-post">
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<a href="#">
														<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/tech/gadget3.jpg" alt="">
													</a>
													<a class="post-cat" href="#">گجت ها</a>
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
														<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/travel5.jpg" alt="">
													</a>
													<a class="post-cat" href="#">مسافرت</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a>
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
														<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/tech/robot5.jpg" alt="">
													</a>
													<a class="post-cat" href="#">رباتیک</a>
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
														<img class="img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/news/lifestyle/food1.jpg" alt="">
													</a>
													<a class="post-cat" href="#">غذا</a>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
													</h2>
													<div class="post-meta">
														<span class="post-date">27 خرداد 1396</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 4 end -->

									</ul><!-- List post end -->
								</div><!-- List post block end -->

							</div><!-- Popular news widget end -->

							<div class="widget text-center">
								<img class="banner img-responsive" src="<?php baseURL('third-party/thems/news/theme/images')?>/banner-ads/ad-sidebar.png" alt="">
							</div><!-- Sidebar Ad end -->

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

						</div><!-- Sidebar right end -->
					</div><!-- Sidebar Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- First block end -->


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