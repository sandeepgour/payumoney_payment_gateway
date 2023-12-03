<?php
$amount=$_POST['amount'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pinfo=$_POST['pinfo'];

$salt="e5iIg1jwi8";
$mkey="rjQUPktU";

$txnid=strtoupper(substr(md5(uniqid()),0,10));

$surl="http://localhost/PaymentGateway/success.php";
$furl="http://localhost/PaymentGateway/failure.php";

$service="payu_paisa";

$hash1="$mkey|$txnid|$amount|$pinfo|$name|$email|||||||||||$salt";

$hash = strtolower(hash('sha512', $hash1));

?>
<html>
	<head></head>
	<body>
		<form method="post" action="https://test.payu.in/_payment" name="payuform" >
			<input type="hidden" name="key" value="<?php echo $mkey; ?>" />
			<input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
			<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
			<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
			<input type="hidden" name="firstname" value="<?php echo $name; ?>" />
			<input type="hidden" name="email" value="<?php echo $email; ?>" />
			<input type="hidden" name="phone" value="<?php echo $mobile; ?>" />
			<input type="hidden" name="productinfo" value="<?php echo $pinfo; ?>" />
			<input type="hidden" name="surl" value="<?php echo $surl; ?>" />
			<input type="hidden" name="furl" value="<?php echo $furl; ?>" />
			<input type="hidden" name="service_provider" value="<?php echo $service; ?>" />
		</form>
		<script>
			document.forms.payuform.submit();
		</script>
	</body>
</html>




