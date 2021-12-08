<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/images/favicon.ico" type="image/ico"/>
    <title>Gentelella Alela! | قالب مدیریت رایگان </title>

    <!-- Bootstrap -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/css/custom.min.css" rel="stylesheet">
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col hidden-print">
            <div class="left_col scroll-view">
                <?php view('panel/profile');  ?>

                <!-- sidebar menu -->
                <?php view('panel/sidebar');  ?>
                <!-- /sidebar menu -->

                <?php  if($footerSettings['status']=='ON'):?>
                <!-- /menu footer buttons -->
                <?php view('panel/footer-buttons');  ?>
                <!-- /menu footer buttons -->
                <?php endif; ?>
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav hidden-print">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/images/img.jpg" alt="">مرتضی کریمی
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> نمایه</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>تنظیمات</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">کمک</a></li>
                                <li><a href="<?php baseURL('index.php/logout');?>"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که<?php baseURL('third-party/thems/gentelella-rtl') ?><?php baseURL('third-party/thems/gentelella-rtl') ?>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که<?php baseURL('third-party/thems/gentelella-rtl') ?><?php baseURL('third-party/thems/gentelella-rtl') ?>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که<?php baseURL('third-party/thems/gentelella-rtl') ?><?php baseURL('third-party/thems/gentelella-rtl') ?>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/images/img.jpg"
                                                                 alt="Profile Image"/></span>
                                        <span>
                          <span>مرتضی کریمی</span>
                          <span class="time">3 دقیقه پیش</span>
                        </span>
                                        <span class="message">
                          فیلمای فستیوال فیلمایی که اجرا شده یا راجع به لحظات مرده ایه که فیلمسازا میسازن. آنها جایی بودند که<?php baseURL('third-party/thems/gentelella-rtl') ?><?php baseURL('third-party/thems/gentelella-rtl') ?>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>مشاهده تمام اعلان ها</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                            <div class="count">179</div>
                            <h3>ثبت نام ها جدید</h3>
                            <p>لورم ایپسوم متن ساختگی با.</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-comments-o"></i></div>
                            <div class="count">179</div>
                            <h3>ثبت نام ها جدید</h3>
                            <p>لورم ایپسوم متن ساختگی با.</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                            <div class="count">179</div>
                            <h3>ثبت نام ها جدید</h3>
                            <p>لورم ایپسوم متن ساختگی با.</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-square-o"></i></div>
                            <div class="count">179</div>
                            <h3>ثبت نام ها جدید</h3>
                            <p>لورم ایپسوم متن ساختگی با.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>خلاصه معامله
                                    <small>پیشرفت هفتگی</small>
                                </h2>
                                <div class="filter">
                                    <div id="reportrange" class="pull-left"
                                         style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>اسفند 29, 1394 - فروردین 28, 1395</span> <b class="caret"></b>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="demo-container" style="height:280px">
                                        <div id="chart_plot_02" class="demo-placeholder"></div>
                                    </div>
                                    <div class="tiles">
                                        <div class="col-md-4 tile">
                                            <span>تعداد جلسات</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline11 graph" style="height: 160px;">
                               <canvas width="200" height="60"
                                       style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                                        </div>
                                        <div class="col-md-4 tile">
                                            <span>درآمد کل</span>
                                            <h2>$231,809</h2>
                                            <span class="sparkline22 graph" style="height: 160px;">
                                <canvas width="200" height="60"
                                        style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                                        </div>
                                        <div class="col-md-4 tile">
                                            <span>تعداد جلسات</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline11 graph" style="height: 160px;">
                                 <canvas width="200" height="60"
                                         style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                          </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div>
                                        <div class="x_title">
                                            <h2>بهترین نمایه</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">تنظیمات 1</a>
                                                        </li>
                                                        <li><a href="#">تنظیمات 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <ul class="list-unstyled top_profiles scroll-view">
                                            <li class="media event">
                                                <a class="pull-left border-aero profile_thumb">
                                                    <i class="fa fa-user aero"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">خانم مری جین</a>
                                                    <p><strong>$2300. </strong> فروش متوسط عامل </p>
                                                    <p>
                                                        <small>امروز 12 فروش</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-green profile_thumb">
                                                    <i class="fa fa-user green"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">خانم مری جین</a>
                                                    <p><strong>$2300. </strong> فروش متوسط عامل </p>
                                                    <p>
                                                        <small>امروز 12 فروش</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-blue profile_thumb">
                                                    <i class="fa fa-user blue"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">خانم مری جین</a>
                                                    <p><strong>$2300. </strong> فروش متوسط عامل </p>
                                                    <p>
                                                        <small>امروز 12 فروش</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-aero profile_thumb">
                                                    <i class="fa fa-user aero"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">خانم مری جین</a>
                                                    <p><strong>$2300. </strong> فروش متوسط عامل </p>
                                                    <p>
                                                        <small>امروز 12 فروش</small>
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="media event">
                                                <a class="pull-left border-green profile_thumb">
                                                    <i class="fa fa-user green"></i>
                                                </a>
                                                <div class="media-body">
                                                    <a class="title" href="#">خانم مری جین</a>
                                                    <p><strong>$2300. </strong> فروش متوسط عامل </p>
                                                    <p>
                                                        <small>امروز 12 فروش</small>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>خلاصه هفتگی
                                    <small>سهم فعالیت</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">تنظیمات 1</a>
                                            </li>
                                            <li><a href="#">تنظیمات 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row"
                                     style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                                    <div class="col-md-7" style="overflow:hidden;">
                        <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                                      <canvas width="200" height="60"
                                              style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                  </span>
                                        <h4 style="margin:18px">پیشرفت های فروش هفتگی</h4>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="row" style="text-align: center;">
                                            <div class="col-md-4">
                                                <canvas class="canvasDoughnut" height="110" width="110"
                                                        style="margin: 5px auto 10px"></canvas>
                                                <h4 style="margin:0">نرخ گزاف گویی</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <canvas class="canvasDoughnut" height="110" width="110"
                                                        style="margin: 5px auto 10px"></canvas>
                                                <h4 style="margin:0">ترافیک جدید</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <canvas class="canvasDoughnut" height="110" width="110"
                                                        style="margin: 5px auto 10px"></canvas>
                                                <h4 style="margin:0">دستگاه مشترک</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>بهترین نمایه ها
                                    <small>جلسات</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">تنظیمات 1</a>
                                            </li>
                                            <li><a href="#">تنظیمات 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد یک</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد دو</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد سه</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد چهار</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد پنج</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>بهترین نمایه ها
                                    <small>جلسات</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">تنظیمات 1</a>
                                            </li>
                                            <li><a href="#">تنظیمات 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد یک</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد دو</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد سه</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد چهار</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد پنج</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>بهترین نمایه ها
                                    <small>جلسات</small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">تنظیمات 1</a>
                                            </li>
                                            <li><a href="#">تنظیمات 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد یک</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد دو</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد سه</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد چهار</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">آپریل</p>
                                        <p class="day">23</p>
                                    </a>
                                    <div class="media-body">
                                        <a class="title" href="#">عنوان مورد پنج</a>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left">
                Gentelella - قالب پنل مدیریت بوت استرپ <a href="https://colorlib.com">Colorlib</a> | پارسی شده توسط <a
                        href="https://morteza-karimi.ir">مرتضی کریمی</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>
<!-- jQuery -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/iCheck/icheck.min.js"></script>

<!-- bootstrap-daterangepicker -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/moment/min/moment.min.js"></script>

<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Chart.js -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- gauge.js -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- Skycons -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/Flot/jquery.flot.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/DateJS/build/production/date.min.js"></script>
<!-- JQVMap -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php baseURL('third-party/thems/gentelella-rtl') ?>/build/js/custom.min.js"></script>

<!-- /bootstrap-daterangepicker -->

</body>
</html>
