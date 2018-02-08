<?php
/* @var $this RumahSakitController */
/* @var $model RumahSakit */
/* @var $form CActiveForm */
?>
<div class="row">
	<div class="col-md-12">
    	<div class="white-box">
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                    </ul>
                    <h3 class="block-title">Form Input Poli/Klinik</h3>
                </div>
                <div class="block-content block-content-narrow">

					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'poli-klinik-form',
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
                                <?php echo $form->textField($model,'nama_poli_klinik',array('class'=>'form-control','placeholder'=>'Nama Poli/Klinik')); ?>
                                <?php echo $form->error($model,'nama_poli_klinik'); ?>
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
    			<button class="btn btn-info waves-effect waves-light m-r-10" type="submit">Submit</button>
    			<?php $this->endWidget(); ?>
    		</div>
    	</div>
	</div>
</div>