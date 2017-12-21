<?php
/* @var $this PendaftaranRumkitController */
/* @var $model PendaftaranRumkit */

$this->breadcrumbs=array(
	'Pendaftaran Rumkits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PendaftaranRumkit', 'url'=>array('index')),
	array('label'=>'Create PendaftaranRumkit', 'url'=>array('create')),
	array('label'=>'Update PendaftaranRumkit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PendaftaranRumkit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PendaftaranRumkit', 'url'=>array('admin')),
);
?>

<h1>View PendaftaranRumkit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_rumah_sakit',
		'id_poli_klinik',
		'id_pasien',
		'tgl_pendaftaran',
	),
)); ?>
