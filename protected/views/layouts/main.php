<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">	

	<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/btmin.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/style.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/fonts.css">
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jq.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/btmin.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container">	
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>					
					</button>
					<a class="brand" href="<?php echo Yii::app()->homeUrl;?>">
						<i class="fa fa-navicon"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">	    
			    	<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Inicio', 'url'=>array('/site/index')),
							array('label'=>'Mecanicos', 'url'=>array('/mecanico/index')),
							//array('label'=>'Menu', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contactenos', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),

						'htmlOptions'=> array(
							'class' => 'nav navbar-nav'
						),
					)); ?>
				</div>
		</div>
	</nav>

	
	<div class="container">
		<div class="page-header">
			<!--<br><br>-->
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
		</div>


		<?php echo $content; ?>			

		<!--
		<div class="text-center" id="footer">
			Copyright &copy; <?php //echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php// echo Yii::powered(); ?>
		</div><!-- footer -->
	</div>

</body>
</html>
