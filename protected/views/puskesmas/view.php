<?php
/* @var $this PuskesmasController */
/* @var $model Puskesmas */

$this->breadcrumbs=array(
	'Puskesmases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Puskesmas', 'url'=>array('index')),
	array('label'=>'Create Puskesmas', 'url'=>array('create')),
	array('label'=>'Update Puskesmas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Puskesmas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Puskesmas', 'url'=>array('admin')),
);
?>

<h1>View Puskesmas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_puskesmas',
		'alamat',
		'no_tlp',
		'image',
	),
)); ?>
