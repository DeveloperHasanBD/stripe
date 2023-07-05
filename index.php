<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="Developer Hasan"
		data-description="Developer Hasan"
		data-image="https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png"
		data-currency="usd"
		data-email="developer.hasan.bd@gmail.com"
	>
	</script>
</form>