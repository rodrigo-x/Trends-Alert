<div class="alerts form">
<?php echo $this->Form->create('Alert');?>
	<fieldset>
 		<legend><?php __('Edit Alert'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('keyword');
		echo $this->Form->input('places_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Alert.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Alert.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alerts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Places', true), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Places', true), array('controller' => 'places', 'action' => 'add')); ?> </li>
	</ul>
</div>