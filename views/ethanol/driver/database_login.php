<?php echo Form::open($submitUri); ?>
<table>
	<tr>
		<td>
			<?php echo Form::label(Lang::get('ethanol.email')); ?><?php echo Form::input('email', '', array('type' => 'email')); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo Form::label(Lang::get('ethanol.password')); ?><?php echo Form::password('password'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo Form::submit('submit', Lang::get('ethanol.log_in')); ?>
		</td>
	</tr>
</table>
<?php echo Form::close(); ?>
