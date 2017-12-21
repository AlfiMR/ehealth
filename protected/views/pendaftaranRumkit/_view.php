<?php
/* @var $this PendaftaranRumkitController */
/* @var $data PendaftaranRumkit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rumah_sakit')); ?>:</b>
	<?php echo CHtml::encode($data->id_rumah_sakit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_poli_klinik')); ?>:</b>
	<?php echo CHtml::encode($data->id_poli_klinik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_pendaftaran')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_pendaftaran); ?>
	<br />


</div>