
<h1 class='title'><?php echo $viewModel->__get('page-title'); ?></h1>

<form name='contact' action='<?php echo SITE_ROOT . 'contact/send' ?>' method='POST'>
	
	<div class='form-element'>
		<label>Full Name:</label>
		<input type='text' name='name' maxlength='55' required placeholder='Enter your name' />
	</div>
	
	<div class='form-element'>
		<label>Email Address:</label>
		<input type='text' name='email' maxlength='55' required placeholder='Enter your email' />
	</div>
	
	<div class='form-element'>
		<label>Subject:</label>
		<input type='text' name='subject' maxlength='140' required placeholder='Enter your subject' />
	</div>
	
	<div class='form-element'>
		<label>Message:</label>
		<textarea name='message'></textarea>
	</div>
	
	<div class='form-element'>
		<input type='submit' name='sendContact' class='' value='Send' />
		<input type='reset' name='resetContact' class='' value='Clear' />
	</div>
</form>