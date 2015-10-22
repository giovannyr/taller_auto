
<?php
/* @var $this MecanicoController */
/* @var $model Mecanico */

$this->breadcrumbs=array(
	'Mecanicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Mecanicos', 'url'=>array('index')),
	array('label'=>'Manage Mecanico', 'url'=>array('admin')),
);
?>

<h1>Crear Mecanico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
