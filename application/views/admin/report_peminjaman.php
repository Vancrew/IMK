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
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
 <body class="fixed-header   ">  
<div class="page-container">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="sm-action-bar">
            <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">

          <!-- START ACTION BAR -->
          <div class="sm-action-bar">

            <a href="#" class="btn-link" data-toggle="quickview" data-toggle-element="#quickview">
              <span class="icon-set menu-hambuger-plus"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
      </div>
      
       <div class="col-md-4">
        <br><br><br><br><br><br>
        <div class="container-fluid container-fixed-lg bg-white">
             <div class="panel-heading">
                    <div class="panel-title">
                    <h5>Silahkan Masukkan Rentang Waktu Peminjaman</h5>
                    </div>
                  </div>                 
                   
                    <div class="input-daterange input-group" id="datepicker-range">
                      <input type="text" class="input-sm form-control" name="start" />
                      <span class="input-group-addon">to</span>
                      <input type="text" class="input-sm form-control" name="end" />
                    </div>
                    <button class="btn btn-primary btn-cons m-t-10" type="submit">Lakukan Pencarian</button>
                      </div>
                      </div>             
        <div class="register-container full-height sm-p-t-30" style="margin-top:4%;margin-bottom: 40%;">
          <div class="col-md-6">
         
                <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Report Peminjaman</h4>
                    </div>
                  </div>
                
                <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg bg-white" style = "width:700px">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              
              <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                </div>
              <div class="panel-body">
                <table class="table table-striped" id="tableWithExportOptions">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Peminjaman</th>
                      <th>Jenis Peminjaman</th>
                      <th>Biaya Peminjaman</th>
                      <th>ID Petugas</th>
                         
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd gradeX">
                      <td>1</td>
                      <td>19 Februari 2015</td>
                      <td>20 Februari 2015</td>
                      <td>PG01110</td>
                      <td >PG01110</td>
                      
                    </tr>
                    <tr class="odd gradeX">
                      <td>2</td>
                      <td>19 Februari 2015</td>
                      <td>20 Februari 2015</td>
                      <td>PG01110</td>
                      <td >PG01110</td>
                     
                    </tr>
                    <tr class="odd gradeX">
                      <td>3</td>
                      <td>19 Februari 2015</td>
                      <td>20 Februari 2015</td>
                      <td>PG01110</td>
                      <td >PG01110</td>
                      
                    </tr>
                    <tr class="odd gradeX">
                      <td>4</td>
                      <td>19 Februari 2015</td>
                      <td>20 Februari 2015</td>
                      <td>PG01110</td>
                      <td >PG01110</td>
                      
                    </tr>
                    <tr class="odd gradeX">
                      <td>5</td>
                      <td>19 Februari 2015</td>
                      <td>20 Februari 2015</td>
                      <td>PG01110</td>
                      <td >PG01110</td>
                      
                    </tr>
                    <tr class="even gradeC">
                      <td>Trident</td>
                      <td>Internet Explorer 5.0</td>
                      <td>Win 95+</td>
                      <td class="center">5</td>
                      <td class="center">C</td>
                    </tr>
                    <tr class="odd gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 5.5</td>
                      <td>Win 95+</td>
                      <td class="center">5.5</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 6</td>
                      <td>Win 98+</td>
                      <td class="center">6</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="odd gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td class="center">7</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td class="center">6</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center">1.7</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center">1.8</td>
                      <td class="center">A</td>
                    </tr>
                    
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.1</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1.1</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.2</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1.2</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.3</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1.3</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.4</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1.4</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.5</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1.5</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.6</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">1.6</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.7</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td class="center">1.7</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Mozilla 1.8</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td class="center">1.8</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center">1.8</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Epiphany 2.20</td>
                      <td>Gnome</td>
                      <td class="center">1.8</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 1.2</td>
                      <td>OSX.3</td>
                      <td class="center">125.5</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 1.3</td>
                      <td>OSX.3</td>
                      <td class="center">312.8</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 2.0</td>
                      <td>OSX.4+</td>
                      <td class="center">419.3</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>Safari 3.0</td>
                      <td>OSX.4+</td>
                      <td class="center">522.1</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>OmniWeb 5.5</td>
                      <td>OSX.4+</td>
                      <td class="center">420</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>iPod Touch / iPhone</td>
                      <td>iPod</td>
                      <td class="center">420.1</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Webkit</td>
                      <td>S60</td>
                      <td>S60</td>
                      <td class="center">413</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 7.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td class="center">-</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 7.5</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td class="center">-</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Presto</td>
                      <td>Opera 8.0</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td class="center">-</td>
                      <td class="center">A</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END PANEL -->
          </div>
        </div>
        </div>
        

          <link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css'>
          <link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" type="text/css" />
          <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/skycons/skycons.js" type="text/javascript"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
          
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-inputmask/jquery.mask.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
          <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/js/form_elements.js" type="text/javascript"></script>
          <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" type="text/javascript"></script>
         
        <script type="text/javascript">
          $(function()
          {
            $('#form-register').validate()
          })
         
          $(function() {
            $( "#slider-range-min" ).slider({
              range: "min",
              value: 0,
              min: 0,
              max: 10,
              slide: function( event, ui ) {
                $( "#amount" ).val("IDR " + ui.value *10+ "0000");
                $( "#normalBike" ).val( ui.value  + " bikes/month");
                if(ui.value>6)$( "#kidsBike" ).val(ui.value +4 + " bikes/month");
                else $( "#kidsBike" ).val( ui.value  + " bikes/month");
                
                if(ui.value>9)$( "#tandemBike" ).val("3" + " bikes/month");
                else if(ui.value>8)$( "#tandemBike" ).val("2" + " bikes/month");
                else if(ui.value>7)$( "#tandemBike" ).val("1" + " bikes/month");
                else $( "#tandemBike" ).val("0" + " bikes/month");
                if(ui.value>9)$( "#mountBike" ).val("2" + " bikes/month");
                else if(ui.value>8)$( "#mountBike" ).val("1" + " bikes/month");
                else $( "#mountBike" ).val("0" + " bikes/month");
                
                $(".a, .b, .c, .d").width(ui.value*10 + "%");
              }
            });
            $(".ui-slider-handle").text("<>");
            $( "#amount" ).val( "IDR " + $( "#slider-range-min" ).slider( "value")*10 + "0000");
            $( "#kidsBike" ).val(  $( "#slider-range-min" ).slider( "value") + " bikes/month");
            $( "#mountBike" ).val( $( "#slider-range-min" ).slider( "value")*0 + " bikes/month");
            $( "#normalBike" ).val( $( "#slider-range-min" ).slider( "value") + " bikes/month");
            $( "#tandemBike" ).val( $( "#slider-range-min" ).slider( "value")*0 + " bikes/month");
          });
        </script>
      <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
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
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url(); ?>pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url(); ?>assets/js/datatables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
</div>
</body>
</html>