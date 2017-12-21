<?php
/* @var $this PendaftaranRumkitController */
/* @var $model PendaftaranRumkit */

$this->breadcrumbs=array(
	'Pendaftaran Rumkits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PendaftaranRumkit', 'url'=>array('index')),
	array('label'=>'Create PendaftaranRumkit', 'url'=>array('create')),
	array('label'=>'View PendaftaranRumkit', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PendaftaranRumkit', 'url'=>array('admin')),
);
?>

<h1>Update PendaftaranRumkit <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>