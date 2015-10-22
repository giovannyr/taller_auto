

<?php
/* @var $this MecanicoController */
/* @var $model Mecanico */
/* @var $form CActiveForm */
?>

	<div class="form">
		
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'mecanico-form',
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>
			<hr>
				<?php echo $form->errorSummary($model); ?>

				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<?php echo $form->labelEx($model,'cedula'); ?>
							<?php echo $form->textField($model,'cedula',array('Class'=>'form-control')); ?>
							<?php echo $form->error($model,'cedula'); ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<?php echo $form->labelEx($model,'nombre'); ?>
							<?php echo $form->textField($model,'nombre',array('Class'=>'form-control')); ?>
							<?php echo $form->error($model,'nombre'); ?>
						</div>
					</div>	
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<?php echo $form->labelEx($model,'correo'); ?>
							<?php echo $form->textField($model,'correo',array('Class'=>'form-control')); ?>
							<?php echo $form->error($model,'correo'); ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<?php echo $form->labelEx($model,'celular'); ?>
							<?php echo $form->textField($model,'celular',array('Class'=>'form-control')); ?>
							<?php echo $form->error($model,'celular'); ?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<?php echo $form->labelEx($model,'telefono'); ?>
							<?php echo $form->textField($model,'telefono',array('Class'=>'form-control')); ?>
							<?php echo $form->error($model,'telefono'); ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<?php echo $form->labelEx($model,'direccion'); ?>
							<?php echo $form->textField($model,'direccion',array('Class'=>'form-control')); ?>
							<?php echo $form->error($model,'direccion'); ?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 alinear-derecha">
						<br>
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('Class' => 'btn btn-primary')); ?>
					</div>
				</div>

			<?php $this->endWidget(); ?>
		</div>

