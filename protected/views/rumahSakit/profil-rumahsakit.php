  <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
      <?php $bg = RumahSakit::model()->findAll("id = $idrumkit"); ?>
      <?php foreach ($bg as $b): ?>
      <?php echo 
      '<section id="home" class="divider layer-overlay overlay-theme-colored2-7 parallax" data-stellar-background-ratio="0.5" data-bg-img='.Yii::app()->request->baseUrl.'/images/rumah-sakit/'.$b->image.'>';
      ?>
      <?php endforeach; ?>
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-200 pb-200">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="pt-80 pb-80">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      </div>
  </section><br/>
  
    
    <!-- Section: about -->
    <section id="about">
    	<div class="container pt-0">
    		<div class="section-content">
    			<div class="row">
            <div class="col-md-3 mb-30">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="p-30">
                  <h3 class="text-uppercase text-white mt-0">Buka Pada Jam :</h3>
                  <div class="opening-hours">
                    <ul class="list-unstyled text-white">
                      <li class="clearfix"> <span>Senin</span>
                        <div class="value"> 8:00am - 12:00pm </div>
                      </li>
                      <li class="clearfix"> <span>Selasa - Kamis </span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                      <li class="clearfix"> <span>Jumat</span>
                        <div class="value">8:00am - 3:00pm</div>
                      </li>
                      <li class="clearfix"> <span>Minggu</span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                      <li class="clearfix"> <span>Free Checkup</span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-30">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Dental Implant</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consec tetur adipis icing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored text-theme-color-2">Read More</a>
            </div>

            <div class="col-md-3 mb-30">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Dental Bridges</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consec tetur adipis icing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored text-theme-color-2">Read More</a>
            </div>

            <div class="col-md-3">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Root Canel</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consec tetur adipis icing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored text-theme-color-2">Read More</a>
            </div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Section: Services --> 
    <section id="services" class="divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="images/wallpaper-1.jpg">
    	<div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Poli/Klinik</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Silahkan Pilih Poli/Klinik</p>
            </div>
          </div>
        </div>

    <?php
      $poli = PoliKlinik::model()->findAll("id_rumkit = $idrumkit");
    ?>

    <div class="section-content">
      <div class="row features-style1">
      <?php foreach ($poli as $key => $value): ?>
        <?php $jumlah = PendaftaranRumkit::model()->findAll("id_poli_klinik = $value->id") ?>
        <div class="col-sm-6 col-md-3">
          <div class="icon-box p-30 bg-white mb-30 border-3px">
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/poli/'.$value->image, 'DORE'); ?>
              <div class="features-details">
                <h3><?php echo $value->nama_poli_klinik; ?></h3>
              </div>
              <?php echo CHtml::link('Daftar',array('pendaftaranRumkit/create','idrumkit'=>$idrumkit,'idpoli'=>$value->id),array('class'=>'btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2')); ?>
              <div class="pull-right">
              <?php $hariini = date('Y-m-d'); ?>
              <span class="btn btn-flat btn-sm btn-danger mt-15  text-theme-color-2"><?php echo PendaftaranRumkit::model()->count("id_poli_klinik = $value->id && id_rumah_sakit = $value->id_rumkit && tgl_pendaftaran = '$hariini'"); ?></span></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  
    		
    	</div>
    </section>



		<!--start testimonial Section-->
    <section class="bg-theme-colored2">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Testimonial</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Testimoni dari para pasien</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-2col" data-dots="true">
              <?php $testimoni = Testimonial::model()->findAll(); ?>
                <?php foreach ($testimoni as $key1 => $value1): ?>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p><?php echo $value1->deskripsi; ?></p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip">
                      <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/testimoni/'.$value1->photo,'', array('class' => 'img-circle', 'width'=>50, 'height'=>50)); ?>
                      </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-theme-colored"><?php echo $value1->nama; ?></h5>
                        <h6 class="title text-white">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
               
                
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>