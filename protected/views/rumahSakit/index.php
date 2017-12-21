<?php
/* @var $this RumahSakitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rumah Sakits',
);

$this->menu=array(
	array('label'=>'Create RumahSakit', 'url'=>array('create')),
	array('label'=>'Manage RumahSakit', 'url'=>array('admin')),
);
?>

<h1>Rumah Sakits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
