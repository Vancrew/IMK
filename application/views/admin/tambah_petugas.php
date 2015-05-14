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
        <div class="register-container full-height sm-p-t-30" style="margin-top:4%;margin-bottom: 40%;">
          <div class="container-sm-height full-height">
            <div class="row row-sm-height">
              <div class="col-sm-12 col-sm-height col-middle">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                <h3>Tambah Petugas</h3>
                <p>
                  <small>
                    Digunakan untuk menambah petugas 
                  </small>
                </p>
                <form id="form-register" class="p-t-15" role="form" action="index.html">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Nama Depan</label>
                        <input type="text" name="fname" placeholder="John" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Nama Belakang</label>
                        <input type="text" name="lname" placeholder="Smith" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Minimum of 4 Charactors" class="form-control" required>
                      </div>
                    </div>
                  </div>

                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default input-group col-sm-12">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="Pick a date" id="datepicker-component2" required>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempatLahir" placeholder="Tempat Lahir Anda" class="form-control" required>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat anda" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                      <label>Jenis Kelamin</label>
                        <div class="radio radio-success">
                          <input type="radio" value="P" name="optionyes" id="yes">
                          <label for="yes">PRIA</label>
                          <input type="radio" checked="checked" value="W" name="optionyes" id="no">
                          <label for="no">WANITA</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group form-group-default">
                    <div class="row">
                    <label>Pilih Tanda Pengenal</label>
                      <div class="col-sm-3">
                        <div class="radio radio-success">
                          <input type="radio" checked="checked"  value="KTP" name="tipePengenal" id="ktp">
                          <label for="ktp">KTP</label>
                        </div>
                      </div>
                      
                      <div class="col-sm-3">
                        <div class="radio radio-success">
                          <input type="radio" value="SIM" name="tipePengenal" id="sim">
                          <label for="sim">SIM</label>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <label>Masukkan Nomor Tanda Pengenal</label>
                        <input type="text" id="noPengenal" name="nomorPengenal" placeholder="Nomor Pengenal" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="We will send loging details to you" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Telephone</label>
                        <span class="help">e.g. "(62)87 333-234-243"</span>
                        <input type="text" name="phone" id="phone" class="form-control"  required>
                      </div>
                    </div>
                  </div>




                  <div class="row m-t-10">
                    <div class="col-md-6">
                      <p>Saya Setuju dengan <a href="#" class="text-info small">Ketentuan</a> dan <a href="#" class="text-info small">Aturan</a> yang berlaku.</p>
                    </div>
                    
                  </div>

                  <button class="btn btn-primary btn-cons m-t-10" type="submit">Tambahkan Petugas</button>
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