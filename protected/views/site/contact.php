<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="transparencia">

	<h1>Contacto</h1><hr>

	<?php if(Yii::app()->user->hasFlash('contact')): ?>

	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>

	<?php else: ?>

	<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>


		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Nombre'); ?>
					<?php echo $form->textField($model,'name', array('Class'=>'form-control')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-group">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email', array('Class'=>'form-control')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<?php echo $form->labelEx($model,'subject'); ?>
					<?php echo $form->textField($model,'subject', array('Class'=>'form-control')); ?>
					<?php echo $form->error($model,'subject'); ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Comentario'); ?><br>
					<?php echo $form->textArea($model,'body', array('Class'=>'form-control')); ?>
					<?php echo $form->error($model,'body'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<?php if(CCaptcha::checkRequirements()): ?>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<?php echo $form->labelEx($model,'verifyCode'); ?><br>
					<div>
					<?php $this->widget('CCaptcha'); ?>
					<br><br>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<?php echo $form->textField($model,'verifyCode', array('Class'=>'form-control')); ?>


					<div class="hint">Please enter the letters as they are shown in the image above.
					<br/>Letters are not case-sensitive.</div>
					<?php echo $form->error($model,'verifyCode'); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row buttons">
			<div class="col-lg-12 alinear-derecha">
				<br>
			<?php echo CHtml::submitButton('Enviar', array('Class'=>'btn btn-primary ')); ?>
			</div>	
		</div>

	<?php $this->endWidget(); ?>

	</div><!-- form -->
</div>
<?php endif; ?>