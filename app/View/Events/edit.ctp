<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('fecha');
		echo $this->Form->input('lugar');
		echo $this->Form->input('filename');
		echo $this->Form->input('dir');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Genero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Event.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
	</ul>
</div>
