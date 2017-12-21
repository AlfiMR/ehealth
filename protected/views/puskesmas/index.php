<?php
/* @var $this PuskesmasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puskesmases',
);

$this->menu=array(
	array('label'=>'Create Puskesmas', 'url'=>array('create')),
	array('label'=>'Manage Puskesmas', 'url'=>array('admin')),
);
?>

<h1>Puskesmases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
