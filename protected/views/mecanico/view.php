
<?php
/* @var $this MecanicoController */
/* @var $model Mecanico */

$this->breadcrumbs=array(
	'Mecanicos'=>array('index'),
	$model->cedula,
);

$this->menu=array(
	array('label'=>'List Mecanico', 'url'=>array('index')),
	array('label'=>'Create Mecanico', 'url'=>array('create')),
	array('label'=>'Update Mecanico', 'url'=>array('update', 'id'=>$model->cedula)),
	array('label'=>'Delete Mecanico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mecanico', 'url'=>array('admin')),
);
?>

<h1>View Mecanico #<?php echo $model->cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula',
		'nombre',
		'correo',
		'celular',
		'telefono',
		'direccion',
	),
)); ?>
<br>