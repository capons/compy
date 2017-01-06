<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.09.2015
 * Time: 14:19
 */
?>

<script type="text/javascript">
	var sess_count = <?php echo $_SESSION['result']; ?>
</script>
<div class="contactFormBlock mobQuestions">
	<p>
<!--        still not convinced?<br/>-->
		<span> please leave your details below and let us dispel all your doubts</span>
	</p>
	<form method="post" action="#modal-one">
		<div id="persData">
			<input type="text" name="name" required placeholder="*Name">
			<input type="text" name="company" placeholder="Company">
			<input type="text" name="userContacts" required placeholder="*Email / Skype">
			<input type="hidden" name="marker" value="contact">
			<textarea type="text" name="userMessage" required placeholder="*Enter your message"></textarea>
			<a href="#modal-one">
				<input type="submit" value="Send">
			</a>
		</div>
		<div id="robot">
			<div class="inputBlock">
				<div id="captcha"><?php echo "$first_count + $two_count"; ?></div>
				<span>=</span>
				<input type="text" name="inputCaptcha">
			</div>
			<div class="sendBlock">
				<a href="#modal-one">
					<div class="mobAskQ">
						<input type="submit" value="Send" required disabled>
					</div>
				</a>
			</div>
		</div>
	</form>
	<div class="fillBtn">FILL IN THE FORM</div>
</div>



