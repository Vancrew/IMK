<div class="page-container">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Tambah Sepeda</title>
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
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    
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
        <div class="register-container full-height sm-p-t-30" style="margin-top:4%;margin-bottom: 40%;">
          <div class="container-sm-height full-height">
            <div class="row row-sm-height">
              <div class="col-sm-12 col-sm-height col-middle">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                <h3>Menambahkan Data Sepeda</h3>
                <p>
                  <small>
                    Dipergunakan untuk menambahkan data sepeda baru 
                  </small>
                </p>
                <form id="form-register" class="p-t-15" role="form" action="index.html">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Nomor Sepeda</label>
                        <input type="text" name="no_sepeda" placeholder="K0201" class="form-control" required>
                      </div>
                    </div>
                  </div>


                   <div class="row">
                    
                   <div class="col-sm-6">
                    <div class="form-group form-group-default">
                    <label>Jenis Sepeda</label>                    
                    <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2" required>
                      <option value="Kid">Kid</option>
                      <option value="Standard">Standard</option>
                      <option value="Mountain">Mountain</option>
                      <option value="Tandem">Tandem</option>
                    </select>
                  </div>
                </div>
                    
                                  
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Merek Sepeda</label>
                        <input type="text" name="no_sepeda" placeholder="K0201" class="form-control" required>
                      </div>
                    </div>
                  </div>
                

                 <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default input-group col-sm-12">
                        <label>Tanggal Pengadaan</label>
                        <input type="text" class="form-control" placeholder="Pick a date" id="datepicker-component2" required>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                    
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                      <label>Kondisi Sepeda</label>
                        <div class="radio radio-success">
                          <input type="radio" checked="checked"  value="Baru" name="optionyes" id="baru">
                          <label for="yes">Baru</label>
                          <input type="radio" value="Bekas" name="optionyes" id="bekas">
                          <label for="yes">Bekas</label>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                   

                  <button class="btn btn-primary btn-cons m-t-10" type="submit">Tambahkan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        <!-- START OVERLAY -->
        <div class="overlay hide" data-pages="search">
          <!-- BEGIN Overlay Content !-->
          <div class="overlay-content has-results m-t-20">
            <!-- BEGIN Overlay Header !-->
            <div class="container-fluid">
              <!-- BEGIN Overlay Logo !-->
              <img class="overlay-brand" src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" data-src="<?php echo base_url(); ?>assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>assets/img/logo_2x.png" width="78" height="22">
              <!-- END Overlay Logo !-->
              <!-- BEGIN Overlay Close !-->
              <a href="#" class="close-icon-light overlay-close text-black fs-16">
                <i class="pg-close"></i>
              </a>
              <!-- END Overlay Close !-->
            </div>
            <!-- END Overlay Header !-->
            <div class="container-fluid">
              <!-- BEGIN Overlay Controls !-->
              <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
              <br>
              <div class="inline-block">
                <div class="checkbox right">
                  <input id="checkboxn" type="checkbox" value="1" checked="checked">
                  <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                </div>
              </div>
              <div class="inline-block m-l-10">
                <p class="fs-13">Press enter to search</p>
              </div>
              <!-- END Overlay Controls !-->
            </div>
            <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
            <div class="container-fluid">
              <span>
                    <strong>suggestions :</strong>
                </span>
              <span id="overlay-suggestions"></span>
              <br>
              <div class="search-results m-t-40">
                <p class="bold">Pages Search Results</p>
                <div class="row">
                  <div class="col-md-6">
                    <!-- BEGIN Search Result Item !-->
                    <div class="">
                      <!-- BEGIN Search Result Item Thumbnail !-->
                      <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                        <div>
                          <img width="50" height="50" src="<?php echo base_url(); ?>assets/img/profiles/avatar.jpg" data-src="<?php echo base_url(); ?>assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>assets/img/profiles/avatar2x.jpg" alt="">
                        </div>
                      </div>
                      <!-- END Search Result Item Thumbnail !-->
                      <div class="p-l-10 inline p-t-5">
                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                        <p class="hint-text">via john smith</p>
                      </div>
                    </div>
                    <!-- END Search Result Item !-->
                    <!-- BEGIN Search Result Item !-->
                    <div class="">
                      <!-- BEGIN Search Result Item Thumbnail !-->
                      <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                        <div>T</div>
                      </div>
                      <!-- END Search Result Item Thumbnail !-->
                      <div class="p-l-10 inline p-t-5">
                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                        <p class="hint-text">via pages</p>
                      </div>
                    </div>
                    <!-- END Search Result Item !-->
                    <!-- BEGIN Search Result Item !-->
                    <div class="">
                      <!-- BEGIN Search Result Item Thumbnail !-->
                      <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                        <div><i class="fa fa-headphones large-text "></i>
                        </div>
                      </div>
                      <!-- END Search Result Item Thumbnail !-->
                      <div class="p-l-10 inline p-t-5">
                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                        <p class="hint-text">via pagesmix</p>
                      </div>
                    </div>
                    <!-- END Search Result Item !-->
                  </div>
                  <div class="col-md-6">
                    <!-- BEGIN Search Result Item !-->
                    <div class="">
                      <!-- BEGIN Search Result Item Thumbnail !-->
                      <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                        <div><i class="fa fa-facebook large-text "></i>
                        </div>
                      </div>
                      <!-- END Search Result Item Thumbnail !-->
                      <div class="p-l-10 inline p-t-5">
                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                        <p class="hint-text">via facebook</p>
                      </div>
                    </div>
                    <!-- END Search Result Item !-->
                    <!-- BEGIN Search Result Item !-->
                    <div class="">
                      <!-- BEGIN Search Result Item Thumbnail !-->
                      <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                        <div><i class="fa fa-twitter large-text "></i>
                        </div>
                      </div>
                      <!-- END Search Result Item Thumbnail !-->
                      <div class="p-l-10 inline p-t-5">
                        <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                        <p class="hint-text">via twitter</p>
                      </div>
                    </div>
                    <!-- END Search Result Item !-->
                    <!-- BEGIN Search Result Item !-->
                    <div class="">
                      <!-- BEGIN Search Result Item Thumbnail !-->
                      <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                        <div><i class="fa fa-google-plus large-text "></i>
                        </div>
                      </div>
                      <!-- END Search Result Item Thumbnail !-->
                      <div class="p-l-10 inline p-t-5">
                        <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                        <p class="hint-text">via google plus</p>
                      </div>
                    </div>
                    <!-- END Search Result Item !-->
                  </div>
                </div>
              </div>
            </div>
            <!-- END Overlay Search Results !-->
          </div>
          <!-- END Overlay Content !-->
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
      
</div>