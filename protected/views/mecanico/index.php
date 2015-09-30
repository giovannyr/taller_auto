<?php
/* @var $this MecanicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mecanicos',
);

$this->menu=array(
	array('label'=>'Create Mecanico', 'url'=>array('create')),
	array('label'=>'Manage Mecanico', 'url'=>array('admin')),
);
?>

<h1>Mecanicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
