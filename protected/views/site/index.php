<!-- Section: Multipage -->
    <section id="multipage" class="bg-lighter">
      <div class="container-fluid pr-30 pl-60">
        <div class="section-title mb-40">
          <div class="row">
            <div class="col-md-5 col-md-offset-4 text-center">              
              <h3 class="text-uppercase font-weight-600 font-36 line-bottom-centered mt-0">Silakan Pilih <span class="text-theme-colored2">Rumah Sakit</span></h3>
              <p class="text-gray-dimgray">Untuk melakukan registrasi atau pendaftaran silakan pilih rumah sakit terlebih dahulu.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
          <?php $rumkit = RumahSakit::model()->findAll(); ?>
          <?php foreach ($rumkit as $key => $value): ?>
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <?php echo CHtml::link('<img src="images/rumah-sakit/'.$value->image.'" alt="">',array('rumahSakit/rumahSakit','idrumkit'=>$value->id)); ?>    
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600"><?php echo $value->nama_rumah_sakit; ?></h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- Puskesmas -->
    <!-- Section: Multipage -->
    <section id="multipage" class="bg-lighter">
      <div class="container-fluid pr-30 pl-60">
        <div class="section-title mb-40">
          <div class="row">
            <div class="col-md-5 col-md-offset-4 text-center">              
              <h3 class="text-uppercase font-weight-600 font-36 line-bottom-centered mt-0">Silakan Pilih <span class="text-theme-colored2">Puskesmas</span></h3>
              <p class="text-gray-dimgray">Untuk melakukan registrasi atau pendaftaran silakan pilih Puskesmas terlebih dahulu.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <?php echo CHtml::link('<img src="images/puskesmas/batujajar.jpg" alt="">',array('rumahSakit/rumahSakit')); ?>
                    
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600">Puskesmas Batujajar</h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <a target="_blank" href="index-mp-layout2.html">
                    <img src="images/puskesmas/garuda.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600">Puskesmas Garuda</h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <a target="_blank" href="index-mp-layout3.html">
                    <img src="images/puskesmas/jelengkong.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600">Puskesmas Jelengkong</h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <a target="_blank" href="index-mp-layout4.html">
                    <img src="images/puskesmas/kiara-condong.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600">Puskesmas Kiara Condong</h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <a target="_blank" href="index-sp-layout1.html">
                    <img src="images/puskesmas/kopo.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600">Puskesmas Kopo</h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Single Demo Item -->
              <div class="demo-figure">
                <div class="demo-single-block">
                  <a target="_blank" href="index-boxed-mp-layout1.html">
                    <img src="images/puskesmas/pasirkaliki.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="demo-tilte text-center mb-60">
                <h3 class="font-weight-600">Puskesmas Pasir Kaliki</h3>
              </div>
              <!-- End Single Demo Item -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end main-content -->