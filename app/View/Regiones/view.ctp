<div class="regiones view">
<h2><?php echo __('Regione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($regione['Regione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($regione['Regione']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Regione'), array('action' => 'edit', $regione['Regione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Regione'), array('action' => 'delete', $regione['Regione']['id']), null, __('Are you sure you want to delete # %s?', $regione['Regione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
