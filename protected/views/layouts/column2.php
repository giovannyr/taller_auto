<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		
		<table class="table table-hover table-condensed table-responsive">
			<thead>
				<tr>
					<th>Placa</th>
					<th>Marca</th>
					<th>Cliente</th>
					<th>Ultima Revision</th>
					<th>Acciones</th>				
				</tr>
			</thead>
			<tbody>
				<?php echo $content; ?>
			</tbody>
		</table>

	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		/*$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();*/
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>