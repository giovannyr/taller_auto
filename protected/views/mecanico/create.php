<?php
/* @var $this MecanicoController */
/* @var $model Mecanico */

$this->breadcrumbs=array(
	'Mecanicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mecanico', 'url'=>array('index')),
	array('label'=>'Manage Mecanico', 'url'=>array('admin')),
);
?>

<h1>Create Mecanico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>