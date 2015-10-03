<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_cliente'); ?>
		<?php echo $form->textField($model,'cedula_cliente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cedula_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->