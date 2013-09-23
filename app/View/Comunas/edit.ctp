<div class="comunas form">
<?php echo $this->Form->create('Comuna'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comuna'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('region_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comuna.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Comuna.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comunas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regione'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
