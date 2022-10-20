<div class="d-flex justify-content-center aligns-items-center ">

<div class="card mb-3" style="max-width: 540px; heigth: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/loginImg.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
		<!-- <h5 class="card-title">Card title</h5> -->
		<h1 class="text-center"><?php echo lang('login_heading');?></h1>
		<p><?php echo lang('login_subheading');?></p>

		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open("auth/login");?>

			<p>
				<?php echo lang('login_identity_label', 'identity');?>
				<?php echo form_input($identity);?>
			</p>

			<p>
			
				<?php echo lang('login_password_label', 'password');?>
				<?php echo form_input($password);?>
			</p>

			<p>
				<?php echo lang('login_remember_label', 'remember');?>
				<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
			</p>


			<p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

		<?php echo form_close();?>

		<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
	</div>
     </div>
   </div>
</div>

</div>



