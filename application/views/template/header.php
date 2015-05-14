<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url(); ?>pages/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if lt IE 9]>
            <link href="assets/plugins/mapplic/css/mapplic-ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    
    <script src="<?php echo base_url(); ?>assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/mapplic/js/hammer.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/mapplic/js/mapplic.js"></script>
     

  
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>



    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url(); ?>pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <!--<script src="<?php echo base_url(); ?>assets/js/dashboard.js" type="text/javascript"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header  dashboard ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo base_url(); ?>assets/img/logo_white.png" data-src-retina="<?php echo base_url(); ?>assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <!-- <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button> -->
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 open">
            <a href="index.html" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="icon-thumbnail bg-success"><i class="pg-home"></i></span>
          </li>
          <li class="">
            <a href="email.html" class="detailed">
              <span class="title">Email</span>
              <span class="details">234 New Emails</span>
            </a>
            <span class="icon-thumbnail "><i class="pg-mail"></i></span>
          </li>
          <li class="">
            <a href="social.html"><span class="title">Social</span></a>
            <span class="icon-thumbnail "><i class="pg-social"></i></span>
          </li>
          <li class="">
            <a href="calendar.html"><span class="title">Calendar</span></a>
            <span class="icon-thumbnail"><i class="pg-calender"></i></span>
          </li>
          <li class="">
            <a href="builder.html">
              <span class="title">Builder</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">UI Elements</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail">Ui</span>
            <ul class="sub-menu">
              <li class="">
                <a href="color.html">Color</a>
                <span class="icon-thumbnail">c</span>
              </li>
              <li class="">
                <a href="typography.html">Typography</a>
                <span class="icon-thumbnail">t</span>
              </li>
              <li class="">
                <a href="icons.html">Icons</a>
                <span class="icon-thumbnail">i</span>
              </li>
              <li class="">
                <a href="buttons.html">Buttons</a>
                <span class="icon-thumbnail">b</span>
              </li>
              <li class="">
                <a href="notifications.html">Notifications</a>
                <span class="icon-thumbnail">n</span>
              </li>
              <li class="">
                <a href="modals.html">Modals</a>
                <span class="icon-thumbnail">m</span>
              </li>
              <li class="">
                <a href="progress.html">Progress &amp; Activity</a>
                <span class="icon-thumbnail">pa</span>
              </li>
              <li class="">
                <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                <span class="icon-thumbnail">ta</span>
              </li>
              <li class="">
                <a href="sliders.html">Sliders</a>
                <span class="icon-thumbnail">s</span>
              </li>
              <li class="">
                <a href="tree_view.html">Tree View</a>
                <span class="icon-thumbnail">tv</span>
              </li>
              <li class="">
                <a href="nestables.html">Nestable</a>
                <span class="icon-thumbnail">ns</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <span class="title">Forms</span>
              <span class="arrow
             "></span>
            </a>
            <span class="icon-thumbnail"><i class="pg-form"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="form_elements.html">Form Elements</a>
                <span class="icon-thumbnail">fe</span>
              </li>
              <li class="">
                <a href="form_layouts.html">Form Layouts</a>
                <span class="icon-thumbnail">fl</span>
              </li>
              <li class="">
                <a href="form_wizard.html">Form Wizard</a>
                <span class="icon-thumbnail">fw</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="portlets.html">
              <span class="title">Portlets</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-grid"></i></span>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Tables</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-tables"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="tables.html">Basic Tables</a>
                <span class="icon-thumbnail">bt</span>
              </li>
              <li class="">
                <a href="datatables.html">Data Tables</a>
                <span class="icon-thumbnail">dt</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Maps</span> 
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail "><i class="pg-map"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="google_map.html">Google Maps</a>
                <span class="icon-thumbnail">gm</span>
              </li>
              <li class="">
                <a href="vector_map.html">Vector Maps</a>
                <span class="icon-thumbnail">vm</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="charts.html"><span class="title">Charts</span></a>
            <span class="icon-thumbnail"><i class="pg-charts"></i></span>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Extra</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="invoice.html">Invoice</a>
                <span class="icon-thumbnail">in</span>
              </li>
              <li class="">
                <a href="404.html">404 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="500.html">500 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="blank_template.html">Blank Page</a>
                <span class="icon-thumbnail">bp</span>
              </li>
              <li class="">
                <a href="login.html">Login</a>
                <span class="icon-thumbnail">l</span>
              </li>
              <li class="">
                <a href="register.html">Register</a>
                <span class="icon-thumbnail">re</span>
              </li>
              <li class="">
                <a href="lock_screen.html">Lockscreen</a>
                <span class="icon-thumbnail">ls</span>
              </li>
              <li class="">
                <a href="gallery.html">Gallery</a>
                <span class="icon-thumbnail">gl</span>
              </li>
              <li class="">
                <a href="timeline.html">Timeline</a>
                <span class="icon-thumbnail">t</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Menu Levels</span>
            <span class="arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;">Level 1</a>
                <span class="icon-thumbnail">L1</span>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Level 2</span>
                <span class="arrow"></span></a>
                <span class="icon-thumbnail">L2</span>
                <ul class="sub-menu">
                  <li>
                    <a href="javascript:;">Sub Menu</a>
                    <span class="icon-thumbnail">Sm</span>
                  </li>
                  <li>
                    <a href="ujavascript:;">Sub Menu</a>
                    <span class="icon-thumbnail">Sm</span>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>



