<?php
/* @var $this PuskesmasController */
/* @var $model Puskesmas */

$this->breadcrumbs=array(
	'Puskesmases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Puskesmas', 'url'=>array('index')),
	array('label'=>'Manage Puskesmas', 'url'=>array('admin')),
);
?>

<h1>Create Puskesmas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>