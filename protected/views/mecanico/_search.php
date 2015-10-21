<?php
/* @var $this MecanicoController */
/* @var $model Mecanico */
/* @var $form CActiveForm */
?>

<div class="wide form">
	<div class="transparencia">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

		<div class="row">
			<?php echo $form->label($model,'cedula'); ?>
			<?php echo $form->textField($model,'cedula',array('size'=>45,'maxlength'=>45)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'nombre'); ?>
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>250)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'correo'); ?>
			<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>100)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'celular'); ?>
			<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'telefono'); ?>
			<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'direccion'); ?>
			<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div>
</div><!-- search-form -->