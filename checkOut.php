
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <script>
	function fun()
	{
		alert("You Have Succesfully Placed Your Order");
	}
  </script>
  <title>Checkout form</title>
      <link rel="stylesheet" type="text/css"  href="checkOut.css">
  
</head>

<body>
<hgroup class="heading">
<h1 class="major">Checkout Form </h1>
</hgroup> 
<form class="checkout">
    <div class="checkout-header">
      <h1 class="checkout-title">
        Checkout
        <span class="checkout-price">Rs448</span>
      </h1>
    </div>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Your name" autofocus>
      <input type="text" class="checkout-input checkout-exp" placeholder="MM">
      <input type="text" class="checkout-input checkout-exp" placeholder="YY">
    </p>
    <p>
      <input type="text" class="checkout-input checkout-card" placeholder="4111 1111 1111 1111">
      <input type="text" class="checkout-input checkout-cvc" placeholder="CVC">
    </p>
    <p>
      <input type="submit" value="Purchase" onclick="fun()"class="checkout-btn">
    </p>
  </form>


  
    <script src="js/index.js"></script>

</body>
</html>
