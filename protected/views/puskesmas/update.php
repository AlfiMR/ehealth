<?php
/* @var $this PuskesmasController */
/* @var $model Puskesmas */

$this->breadcrumbs=array(
	'Puskesmases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Puskesmas', 'url'=>array('index')),
	array('label'=>'Create Puskesmas', 'url'=>array('create')),
	array('label'=>'View Puskesmas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Puskesmas', 'url'=>array('admin')),
);
?>

<h1>Update Puskesmas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>