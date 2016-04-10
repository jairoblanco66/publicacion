<div class="generos view">
<h2><?php echo __('Genero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genero['Genero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($genero['Genero']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Genero'), array('action' => 'edit', $genero['Genero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Genero'), array('action' => 'delete', $genero['Genero']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genero['Genero']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($genero['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($genero['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['titulo']; ?></td>
			<td><?php echo $event['fecha']; ?></td>
			<td><?php echo $event['lugar']; ?></td>
			<td><?php echo $event['filename']; ?></td>
			<td><?php echo $event['dir']; ?></td>
			<td><?php echo $event['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
