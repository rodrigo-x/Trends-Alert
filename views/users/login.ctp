<?php
    echo $this->Form->create('User', array('action' => 'login'));
?>
<fieldset>
 		<legend><h2><?php __('Login on Trends Alert'); ?></h2></legend>
 		<?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->input('email');
    echo $this->Form->input('password'); ?>
    <div class="form-actions">
		<?php echo $this->Form->submit('Login',array('class'=>'btn btn-primary btn-large')); ?>
	</div></fieldset>
<?php echo $this->Form->end();?>