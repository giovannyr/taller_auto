<?php
/* @var $this ServicioController */
/* @var $data Servicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa_vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->placa_vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cc_mecanico')); ?>:</b>
	<?php echo CHtml::encode($data->cc_mecanico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lista_servicios_id')); ?>:</b>
	<?php echo CHtml::encode($data->lista_servicios_id); ?>
	<br />


</div>