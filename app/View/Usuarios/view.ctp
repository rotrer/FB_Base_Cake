<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fbuid'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fbuid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['comuna_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['region_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id Wp'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['user_id_wp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['post_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complete'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['complete']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['meta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
