<?php
/* @var $this PoliKlinikController */
/* @var $model PoliKlinik */

$this->breadcrumbs=array(
	'Poli Kliniks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PoliKlinik', 'url'=>array('index')),
	array('label'=>'Manage PoliKlinik', 'url'=>array('admin')),
);
?>

<h1>Create PoliKlinik</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>