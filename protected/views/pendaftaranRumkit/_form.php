
<section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="<?php echo Yii::app()->baseUrl; ?> /images/wallpaper-1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pb-100">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="<?php echo Yii::app()->baseUrl; ?> /images/logo-ehealth-2.png"></a></div>
                <div class="bg-lightest border-1px p-25">
                <div class="pull-right">
                  <?php echo CHtml::link('Kembali',array('rumahSakit/rumahSakit','idrumkit'=>$idrumkit),array('class'=>'btn btn-success')); ?>
                  </div>
                  <h4 class="text-theme-colored text-uppercase m-0">Daftar Form Antrian</h4>
                  <div class="line-bottom mb-30"></div>
                  <p>Silakan isi form di bawah ini untuk mendaftar antrian.</p>
                  <?php $form=$this->beginWidget('CActiveForm', array(
        						'id'=>'pendaftaran-rumkit-form',
        						// Please note: When you enable ajax validation, make sure the corresponding
        						// controller action is handling ajax validation correctly.
        						// There is a call to performAjaxValidation() commented in generated controller code.
        						// See class documentation of CActiveForm for details on this.
        						'enableAjaxValidation'=>false,
                    'htmlOptions' => array('enctype'=>'multipart/form-data'),
        					)); ?>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <?php echo $form->textField($model2,'nik',array('class'=>'form-control','placeholder'=>'Silakan Masukkan NIK Anda')); ?>
                          <?php echo $form->error($model2,'nik'); ?>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <?php echo $form->textField($model2,'nama_pasien',array('class'=>'form-control','placeholder'=>'Masukkan Nama Pasien')); ?>
                          <?php echo $form->error($model2,'nama_pasien'); ?>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <?php echo $form->textArea($model2,'alamat',array('class'=>'form-control','placeholder'=>'Masukkan Alamat')); ?>
                          <?php echo $form->error($model2,'alamat'); ?>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <?php echo $form->textField($model2,'email',array('class'=>'form-control','placeholder'=>'Masukkan Email')); ?>
                          <?php echo $form->error($model2,'email'); ?>
                        </div>
                      </div>

                    <div class="col-sm-12">
                     	<div class="form-group mb-10">
                          <?php echo $form->textField($model2,'no_hp',array('class'=>'form-control','placeholder'=>'Masukkan Nomor HP')); ?>
                          <?php echo $form->error($model2,'no_hp'); ?>
                        </div>
                    </div>

                    <div class="col-sm-12">
                     	<div class="form-group mb-10">
                          <?php echo $form->textField($model,'tgl_pendaftaran',array('id'=>'datepicker','class'=>'form-control','placeholder'=>'Tanggal Pendaftaran')); ?>
                          <?php echo $form->error($model,'tgl_pendaftaran'); ?>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                          <img src="<?php echo Yii::app()->baseUrl; ?> /images/no-image.png" alt="" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
                        </div>
                      </div>
                    <br/><br/><br/><br/>

                    <div class="col-sm-12">
                    <label>Foto Pasien</label>
                      <div class="form-group mb-10">
                          <?php echo $form->fileField($model2,'image',array('class'=>'form-control', 'id' =>'inputgambar')); ?>
                          <?php echo $form->error($model,'image'); ?>
                      </div>
                    </div>

                  </div>
     
                    <div class="form-group mb-0 mt-20">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                    </div>
                  <?php $this->endWidget(); ?>
                  <!-- Appointment Form Validation-->
                  <script type="text/javascript">
                    $("#appointment_form").validate({
                      submitHandler: function(form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $(form).ajaxSubmit({
                          dataType:  'json',
                          success: function(data) {
                            if( data.status === 'true' ) {
                              $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                          }
                        });
                      }
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>