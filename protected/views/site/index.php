<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="transparencia">
<h1>Bienvenido al <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Placa</th>
				<th>Tipo Vehiculo</th>
				<th>Ultima revisión</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody id="mostrarMecanicos">
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>


</div>



