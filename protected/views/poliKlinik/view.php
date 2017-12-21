<?php
/* @var $this PoliKlinikController */
/* @var $model PoliKlinik */

$this->breadcrumbs=array(
	'Poli Kliniks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PoliKlinik', 'url'=>array('index')),
	array('label'=>'Create PoliKlinik', 'url'=>array('create')),
	array('label'=>'Update PoliKlinik', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PoliKlinik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PoliKlinik', 'url'=>array('admin')),
);
?>

<h1>View PoliKlinik #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_poli_klinik',
	),
)); ?>
