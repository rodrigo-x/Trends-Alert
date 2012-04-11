<div class="alerts view">
<h2><?php  __('Alert');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alert['Alert']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Users'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alert['Users']['id'], array('controller' => 'users', 'action' => 'view', $alert['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Keyword'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alert['Alert']['keyword']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Places'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alert['Places']['title'], array('controller' => 'places', 'action' => 'view', $alert['Places']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alert', true), array('action' => 'edit', $alert['Alert']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Alert', true), array('action' => 'delete', $alert['Alert']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alert['Alert']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alerts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alert', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Places', true), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Places', true), array('controller' => 'places', 'action' => 'add')); ?> </li>
	</ul>
</div>
