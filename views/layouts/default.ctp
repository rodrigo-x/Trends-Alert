<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>
		<?php __('Germídias:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema para gerenciamento de Mídias Sociais em setores públicos">
    <meta name="author" content="Sérgio Vilar - sergiovilar.r@gmail.com">
	
	<?php
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->css('colorpicker');
		echo $this->Html->css('style');
	?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php echo $this->Html->meta('icon'); ?>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot; ?>img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot; ?>img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot; ?>img/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<?php echo $this->element('menu', array('controller'=>$this->name)); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<?php 
					if($this->name == "Monitoramentos"):
						echo $this->element('sidebar-monitoramentos',array('action'=>$this->action));
					elseif($this->name == "Tags"):
						echo $this->element('sidebar-tags',array('action'=>$this->action));
					else:
						echo $this->element('sidebar');
					endif;
				?>
			</div>
			<div id="page-content" class="span10">
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		<hr>
      	<footer>
        	<p>&copy; Company 2012</p>
      	</footer>
    </div><!--/.fluid-container-->
	
	<?php //echo $this->element('sql_dump'); ?>
	
	<?php 
		echo $scripts_for_layout;
		echo $this->Html->script('jquery.js');
		echo $this->Html->script('bootstrap-transition.js');
		echo $this->Html->script('bootstrap-alert.js');
		echo $this->Html->script('bootstrap-modal.js');
		echo $this->Html->script('bootstrap-dropdown.js');
		echo $this->Html->script('bootstrap-scrollspy.js');
		echo $this->Html->script('bootstrap-tab.js');
		echo $this->Html->script('bootstrap-tooltip.js');
		echo $this->Html->script('bootstrap-popover.js');
		echo $this->Html->script('bootstrap-button.js');
		echo $this->Html->script('bootstrap-collapse.js');
		echo $this->Html->script('bootstrap-carousel.js');
		echo $this->Html->script('bootstrap-typeahead.js');
		echo $this->Html->script('bootstrap-colorpicker.js');
		//echo $script->link('cakebootstrap.js');
		echo $this->Html->script('functions.js');
	?>

</body>
</html>