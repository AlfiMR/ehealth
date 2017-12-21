<?php
/* @var $this PendaftaranRumkitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendaftaran Rumkits',
);

$this->menu=array(
	array('label'=>'Create PendaftaranRumkit', 'url'=>array('create')),
	array('label'=>'Manage PendaftaranRumkit', 'url'=>array('admin')),
);
?>

<h1>Pendaftaran Rumkits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
