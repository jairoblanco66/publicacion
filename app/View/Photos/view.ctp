<div class="photos view">
<h2><?php echo __('Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($photo['Event']['id'], array('controller' => 'events', 'action' => 'view', $photo['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo'), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Photo'), array('action' => 'delete', $photo['Photo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $photo['Photo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
