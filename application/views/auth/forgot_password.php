<div class="container">
	<div class="resetmdp mt-5 shadow-sm" style="margin:0 auto;">
		<h1><?php echo lang('forgot_password_heading');?></h1>
		<p class="mt-3"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
		<div class="form-group">
			<label for="identity" class="form-label mt-4"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
			<?php echo form_input($identity);?>
			<div id="infoMessage"><?php echo $message;?></div>
			
			<?php echo form_open("auth/forgot_password");?>
			
			<!-- <p>
				
			</p> -->
			
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			<p class="mt-3"><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>
			
			<?php echo form_close();?>
		</div>				
	</div>

</div>
