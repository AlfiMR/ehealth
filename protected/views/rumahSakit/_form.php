<?php
/* @var $this RumahSakitController */
/* @var $model RumahSakit */
/* @var $form CActiveForm */
?>
<div class="row">
	<div class="col-md-6">
    	<div class="white-box">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                    </ul>
                    <h3 class="block-title">Form Input Rumah Sakit</h3>
                </div>
                <div class="block-content block-content-narrow">

					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'rumah-sakit-form',
						// Please note: When you enable ajax validation, make sure the corresponding
						// controller action is handling ajax validation correctly.
						// There is a call to performAjaxValidation() commented in generated controller code.
						// See class documentation of CActiveForm for details on this.
						'enableAjaxValidation'=>false,
						'htmlOptions' => array('enctype'=>'multipart/form-data'),
					)); ?>

					<div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <?php echo $form->textField($model,'nama_rumah_sakit',array('class'=>'form-control','placeholder'=>'Rumah Sakit')); ?>
                                <?php echo $form->error($model,'nama_rumah_sakit'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <?php echo $form->textArea($model,'alamat',array('class'=>'form-control', 'placeholder' => 'Alamat')); ?>
                                <?php echo $form->error($model,'alamat'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <?php echo $form->textField($model,'no_tlp',array('class'=>'form-control','placeholder'=>'Masukkan No Hp')); ?>
                                <?php echo $form->error($model,'no_tlp'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <?php echo $form->fileField($model,'image',array('class'=>'form-control')); ?>
                                <?php echo $form->error($model,'image'); ?>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
	</div>

	<div class="col-md-6">
    	<div class="white-box">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                    </ul>
                    <h3 class="block-title">Form Input User</h3>
                </div>
                <div class="block-content block-content-narrow">

					<div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <?php echo $form->textField($model2,'username',array('class'=>'form-control','placeholder'=>'Username')); ?>
                                <?php echo $form->error($model2,'username'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <?php echo $form->passwordField($model2,'password',array('class'=>'form-control', 'placeholder' => 'Password')); ?>
                                <?php echo $form->error($model2,'password'); ?>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
	</div>
	<div class="col-md-12">
    	<div class="white-box">
    	<center><button class="btn btn-info waves-effect waves-light m-r-10" type="submit">Submit</button></center>
    	</div>
    </div>
    <?php $this->endWidget(); ?>
</div>