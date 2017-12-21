<?php
/* @var $this PoliKlinikController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Poli Kliniks',
);

$this->menu=array(
	array('label'=>'Create PoliKlinik', 'url'=>array('create')),
	array('label'=>'Manage PoliKlinik', 'url'=>array('admin')),
);
?>

<h1>Poli Kliniks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
