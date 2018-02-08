

<section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="<?php echo Yii::app()->baseUrl; ?> /images/wallpaper-1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pb-100">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><?php echo CHtml::link('<img src="../images/logo-ehealth-2.png">',array('site/')); ?></div>
                <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0">Data Pasien</h4>
                  <div class="line-bottom mb-30"></div>
                  <center><?php echo
                  CHtml::image(Yii::app()->request->baseUrl. '/images/pasien/'.$model2->image,"$model2->nama_pasien", array('width'=>200,'height'=>200));
                  ?>
                  <h1><?php echo 'No Antrian<br/>','<b><u>'.$model->no_antrian.'</b></u>' ?></h1>
                  </center><br/>

					<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$model,
						'attributes'=>array(
							array(
								'label' => 'Nama Pasien',
								'value' => $model2->nama_pasien,
							),
							array(
								'label' => 'NIK Pasien',
								'value' => $model2->nik,
							),
							array(
								'label' => 'Rumah Sakit',
								'value' => $rumkit->nama_rumah_sakit,
							),
							array(
								'label' => 'Poli/Klinik',
								'value' => $poli->nama_poli_klinik,
							),
							array(
								'label' => 'Mendaftar Untuk Tanggal',
								'value' => $model->tgl_pendaftaran,
							),
						),
					)); ?>
					<br/>
                    <center>
			        <?php echo CHtml::link('<i class="fa fa-print"></i> Cetak',array('poliklinik/create'),array('class'=>'btn btn-dark btn-theme-colored')); ?>
			        </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
