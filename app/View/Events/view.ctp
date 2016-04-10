<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($event['Event']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($event['Event']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($event['Event']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($event['Event']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($event['Event']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['User']['id'], array('controller' => 'users', 'action' => 'view', $event['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($event['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['filename']; ?></td>
			<td><?php echo $photo['dir']; ?></td>
			<td><?php echo $photo['comentario']; ?></td>
			<td><?php echo $photo['event_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $photo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Generos'); ?></h3>
	<?php if (!empty($event['Genero'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Genero'] as $genero): ?>
		<tr>
			<td><?php echo $genero['id']; ?></td>
			<td><?php echo $genero['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'generos', 'action' => 'view', $genero['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'generos', 'action' => 'edit', $genero['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'generos', 'action' => 'delete', $genero['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genero['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
