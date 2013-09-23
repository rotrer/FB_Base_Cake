<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('fbuid');
		echo $this->Form->input('rut');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('genero');
		echo $this->Form->input('comuna_id');
		echo $this->Form->input('region_id');
		echo $this->Form->input('ip');
		echo $this->Form->input('user_id_wp');
		echo $this->Form->input('post_id');
		echo $this->Form->input('complete');
		echo $this->Form->input('meta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
