<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->placa=>array('view','id'=>$model->placa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehiculo', 'url'=>array('index')),
	array('label'=>'Create Vehiculo', 'url'=>array('create')),
	array('label'=>'View Vehiculo', 'url'=>array('view', 'id'=>$model->placa)),
	array('label'=>'Manage Vehiculo', 'url'=>array('admin')),
);
?>

<h1>Update Vehiculo <?php echo $model->placa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>