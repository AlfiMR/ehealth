<?php
/* @var $this RumahSakitController */
/* @var $model RumahSakit */

$this->breadcrumbs=array(
	'Rumah Sakits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RumahSakit', 'url'=>array('index')),
	array('label'=>'Create RumahSakit', 'url'=>array('create')),
	array('label'=>'View RumahSakit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RumahSakit', 'url'=>array('admin')),
);
?>

<h1>Update RumahSakit <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>