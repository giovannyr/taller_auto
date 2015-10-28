<?php
/* @var $this ServicioController */
/* @var $model Servicio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'placa_vehiculo'); ?>
		<?php echo $form->textField($model,'placa_vehiculo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'placa_vehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cc_mecanico'); ?>
		<?php echo $form->textField($model,'cc_mecanico',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cc_mecanico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lista_servicios_id'); ?>
		<?php echo $form->textField($model,'lista_servicios_id'); ?>
		<?php echo $form->error($model,'lista_servicios_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->