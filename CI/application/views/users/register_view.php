<h1>Register</h1>

<?php $attributes = array('id'=>'login_form','class'=>'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>
<?php echo $this->session->flashdata('errors') ?>
<?php endif; ?>

<?php echo form_open('users/register',$attributes); ?>

<div class="form-group">
	<?php echo form_label('Username'); ?>
	<?php 
	$data = array(
		'class'=>'form-control',
		'name'=>'username',
		'placeholder'=>'Enter Username'
	);
	?>

	<?php echo form_input($data); ?>
</div>

<div class="form-group">
	<?php echo form_label('Password'); ?>
	<?php 
	$data = array(
		'class'=>'form-control',
		'name'=>'password',
		'placeholder'=>'Enter Password'
	);
	?>

	<?php echo form_password($data); ?>
</div>

<div class="form-group">
	<?php echo form_label('Confirm Password'); ?>
	<?php 
	$data = array(
		'class'=>'form-control',
		'name'=>'confirm_password',
		'placeholder'=>'Re-enter Password'
	);
	?>

	<?php echo form_password($data); ?>
</div>

<div class="form-group">
	<?php 
	$data = array(
		'class'=>'btn btn-primary',
		'name'=>'submit',
		'value'=>'Register'
	);
	?>

	<?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>