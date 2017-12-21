<?php
/* @var $this RumahSakitController */
/* @var $model RumahSakit */

$this->breadcrumbs=array(
	'Rumah Sakits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RumahSakit', 'url'=>array('index')),
	array('label'=>'Create RumahSakit', 'url'=>array('create')),
	array('label'=>'Update RumahSakit', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RumahSakit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RumahSakit', 'url'=>array('admin')),
);
?>

<h1>View RumahSakit #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_rumah_sakit',
		'alamat',
		'no_tlp',
		'image',
	),
)); ?>
