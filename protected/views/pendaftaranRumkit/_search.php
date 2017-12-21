<?php
/* @var $this PendaftaranRumkitController */
/* @var $model PendaftaranRumkit */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_rumah_sakit'); ?>
		<?php echo $form->textField($model,'id_rumah_sakit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_poli_klinik'); ?>
		<?php echo $form->textField($model,'id_poli_klinik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_pendaftaran'); ?>
		<?php echo $form->textField($model,'tgl_pendaftaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->