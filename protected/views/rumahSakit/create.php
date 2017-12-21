<?php
/* @var $this RumahSakitController */
/* @var $model RumahSakit */

$this->breadcrumbs=array(
	'Rumah Sakits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RumahSakit', 'url'=>array('index')),
	array('label'=>'Manage RumahSakit', 'url'=>array('admin')),
);
?>

<h1>Create RumahSakit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>