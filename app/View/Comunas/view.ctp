<div class="comunas view">
<h2><?php echo __('Comuna'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comuna['Comuna']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($comuna['Comuna']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comuna['Regione']['name'], array('controller' => 'regiones', 'action' => 'view', $comuna['Regione']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comuna'), array('action' => 'edit', $comuna['Comuna']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comuna'), array('action' => 'delete', $comuna['Comuna']['id']), null, __('Are you sure you want to delete # %s?', $comuna['Comuna']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comuna'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regione'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
