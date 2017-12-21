<?php
/* @var $this PoliKlinikController */
/* @var $model PoliKlinik */

$this->breadcrumbs=array(
	'Poli Kliniks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PoliKlinik', 'url'=>array('index')),
	array('label'=>'Create PoliKlinik', 'url'=>array('create')),
	array('label'=>'View PoliKlinik', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PoliKlinik', 'url'=>array('admin')),
);
?>

<h1>Update PoliKlinik <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>