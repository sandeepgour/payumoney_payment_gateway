<html>
	<head>
		<title>Checkout</title>
	</head>
	<body>
		<h1>Checkout billing info</h1>
		<form action="Payment.php" method="post">
		
			Enter Amount
			<input type="text" name="amount" />
			
			<br/><br/>
			
			Enter Firstname
			<input type="text" name="name" />
			
			<br/><br/>
			
			Enter Email
			<input type="text" name="email" />
			
			<br/><br/>
			
			Enter Phone
			<input type="text" name="mobile" />
			
			<br/><br/>
			Enter Product Info
			<textarea name="pinfo" ></textarea>
			
			<hr/>
			<button>Proceed to Pay</button>
			
			
		</form>
		
	</body>

</html>