<br>
<?php
/* @var $this MecanicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mecanicos',
);


	$this->menu=array(
	array('label'=>'Crear un Mecanico', 'url'=>array('create')),
	array('label'=>'Administrar Mecanicos', 'url'=>array('admin')),
);
?>

<h1>Mecanicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
