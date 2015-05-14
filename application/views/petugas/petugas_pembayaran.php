<div class="page-container">
      <!-- START HEADER -->
      
        <div class="register-container full-height sm-p-t-30" style="margin-top:4%;margin-bottom: 40%;">
          <div class="container-sm-height full-height">
            <div class="row row-sm-height">
              <div class="col-sm-12 col-sm-height col-middle">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                <h3>Pembayaran Peminjaman Sepeda</h3>
               
                <form id="form-cek_kodebooking" class="p-t-15" role="form" action="pembayaran2">
                  <h4> Masukan Kode Reservasi (Jika ada)</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Kode Reservasi</label>
                        <input type="text" name="kode" placeholder="Kode Booking" class="form-control" required>
                      </div>
                    </div>
                  <button class="btn btn-primary btn-cons m-t-10" type="submit">Cek Kode Reservasi</button>
                </form>
              </div>
              <div>
                <p>
                  <small>
                    Isi Data Peminjaman Langsung
                  </small>
                </p>
                <form id="form-data_peminjaman" class="p-t-15" role="form" action="pembayaran2">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>No Identitas</label>
                        <input type="text" name="noid" placeholder="No Identitas" class="form-control" required>
                      </div>
                    </div>
                  </div>        

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default input-group col-sm-12">
                        <label>Tanggal Peminjaman</label>
                        <input type="text" style="width: 100%" name="reservation" id="daterangepicker" class="form-control" value="01/01/2015 8:00 AM - 01/01/2015 4:00 PM" />
                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                        
                      </div>
                    </div>
                  </div>

                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default input-group col-sm-12">
                        <label>Tanggal Pengembalian</label>
                        <input type="text" class="form-control" placeholder="Pick a date" id="datepicker-component2" required>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div> -->

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Jumlah Sepeda</label>

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label class="">Sepeda Anak - Anak</label>
                              <span class="help">Rp 25.000/sepeda/hari</span>
                              <select class="full-width" id="jml1" data-placeholder="Select Country" data-init-plugin="select2">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label class="">Sepeda Standar</label>
                              <span class="help">Rp 50.000/sepeda/hari</span>
                              <select class="full-width" id="jml2" data-placeholder="Select Country" data-init-plugin="select2">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label class="">Sepeda Gunung</label>
                              <span class="help">Rp 75.000/sepeda/hari</span>
                              <select class="full-width" id="jml3" data-placeholder="Select Country" data-init-plugin="select2">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label class="">Sepeda Tandem</label>
                              <span class="help">Rp 100.000/sepeda/hari</span>
                              <select class="full-width" id="jml4" data-placeholder="Select Country" data-init-plugin="select2">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  <!-- 
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Jumlah Sepeda Mountain Bikes</label>
                        <input type="text" name="jumlah" placeholder="Jumlah Sepeda" class="form-control" required>
                        <select name="jml2" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Jumlah Sepeda Standard Bikes</label>
                        <input type="text" name="jumlah" placeholder="Jumlah Sepeda" class="form-control" required>
                        <select name="jml3" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Jumlah Sepeda Tandem Bikes </label>
                        <input type="text" name="jumlah" placeholder="Jumlah Sepeda" class="form-control" required>
                        <select name="jml4" class="form-control">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                   
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Biaya</label>
                        <input type="text" name="biaya" id="biaya" value="0" placeholder="Total Biaya" class="form-control" disabled="">
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary btn-cons m-t-10" type="submit">Submit</button>
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
         
          $(function()
          {


            function calculateDate() { 
              var date=$('input[name="reservation"]').val().split('- ') 
              var dateConv1 = new Date(date[0]); 
              var dateMill1 =dateConv1.getTime(); 
              var dateConv2 = new Date(date[1]); 
              var dateMill2 =dateConv2.getTime(); console.log(date) 
              var totdate = dateMill2 -dateMill1 
              return (Math.floor(totdate/86400000) + 1)
            }

            // $('input[name="reservation"]').change(){

            // }

            $('input[name="reservation"]').on("apply.daterangepicker",function(){
              var jml1 = $('#jml1 option:selected').val() * 25000;
              var jml2 = $('#jml2 option:selected').val() * 50000;
              var jml3 = $('#jml3 option:selected').val() * 75000;
              var jml4 = $('#jml4 option:selected').val() * 100000;
              var days = calculateDate();
              var total = (jml1 + jml2 + jml3 + jml4) * days
              $('#biaya').val(total);
            
            })

            $('#jml1').change(function(){
              var jml1 = $('#jml1 option:selected').val() * 25000;
              var jml2 = $('#jml2 option:selected').val() * 50000;
              var jml3 = $('#jml3 option:selected').val() * 75000;
              var jml4 = $('#jml4 option:selected').val() * 100000;
              var days = calculateDate();
              var total = (jml1 + jml2 + jml3 + jml4) * days
              $('#biaya').val(total);
            
            })
              

            $('#jml2').change(function(){
              var jml1 = $('#jml1 option:selected').val() * 25000;
              var jml2 = $('#jml2 option:selected').val() * 50000;
              var jml3 = $('#jml3 option:selected').val() * 75000;
              var jml4 = $('#jml4 option:selected').val() * 100000;
              var days = calculateDate();
              var total = (jml1 + jml2 + jml3 + jml4) * days
              $('#biaya').val(total);
            
            })

            $('#jml3').change(function(){
              var jml1 = $('#jml1 option:selected').val() * 25000;
              var jml2 = $('#jml2 option:selected').val() * 50000;
              var jml3 = $('#jml3 option:selected').val() * 75000;
              var jml4 = $('#jml4 option:selected').val() * 100000;
              var days = calculateDate();
              var total = (jml1 + jml2 + jml3 + jml4) * days
              $('#biaya').val(total);
            
            })

            $('#jml4').change(function(){
              var jml1 = $('#jml1 option:selected').val() * 25000;
              var jml2 = $('#jml2 option:selected').val() * 50000;
              var jml3 = $('#jml3 option:selected').val() * 75000;
              var jml4 = $('#jml4 option:selected').val() * 100000;
              var days = calculateDate();
              var total = (jml1 + jml2 + jml3 + jml4) * days
              $('#biaya').val(total);
            
            })

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