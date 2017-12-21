<?php
/* @var $this PoliKlinikController */
/* @var $data PoliKlinik */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_poli_klinik')); ?>:</b>
	<?php echo CHtml::encode($data->nama_poli_klinik); ?>
	<br />


</div>