<?php
/* @var $this PendaftaranRumkitController */
/* @var $model PendaftaranRumkit */

$this->breadcrumbs=array(
	'Pendaftaran Rumkits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PendaftaranRumkit', 'url'=>array('index')),
	array('label'=>'Create PendaftaranRumkit', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pendaftaran-rumkit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pendaftaran Rumkits</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pendaftaran-rumkit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_rumah_sakit',
		'id_poli_klinik',
		'id_pasien',
		'tgl_pendaftaran',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
