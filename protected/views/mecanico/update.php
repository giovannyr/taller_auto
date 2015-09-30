<?php
/* @var $this MecanicoController */
/* @var $model Mecanico */

$this->breadcrumbs=array(
	'Mecanicos'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mecanico', 'url'=>array('index')),
	array('label'=>'Create Mecanico', 'url'=>array('create')),
	array('label'=>'View Mecanico', 'url'=>array('view', 'id'=>$model->cedula)),
	array('label'=>'Manage Mecanico', 'url'=>array('admin')),
);
?>

<h1>Update Mecanico <?php echo $model->cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>