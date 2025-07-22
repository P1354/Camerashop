<!DOCTYPE html>
<html>
<head>
    <title>Pay by Debit Card</title>
    <style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f7f6;
    margin: 0;
}

.pay {
    background-color: #fff;
    padding: 40px;
    width: 400px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.pay h2 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
    color: #333;
}


.card_logo {
    text-align: center;
    margin-bottom:20px;
}

.card_logo img {
    max-width: 200%;
    height: auto;
}
.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    color: #666;
    font-weight: bold;
}

.input-group input[type="text"],
.input-group input[type="number"] {
    width: 100%;
    height: 40px;
    padding: 0 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.input-group input[type="submit"] {
    width: 100%;
    height: 40px;
    border: none;
    background-color: #108A4F;
    color: #fff;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.input-group input[type="submit"]:hover {
    background-color: #0e6f3e;
}

.error-message {
    color: #ff0000;
    font-size: 14px;
    margin-top: 5px;
}
    
    .in{
        width: 300px;
        height: 40px;
    }
</style>
</head>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="pay">
        <h2>Payment Form</h2>
        <div class="card_logo">
            <img src="card_logo" alt="Card Logo">
        </div>
        <form id="paymentForm">
		<div class="input-group">
                <label for="cardname">Card Holder Name</label>
                <input type="text" id="cardname" name="cardname" class="in" required>
            </div>
            <div class="input-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" class="in" required>
            </div>
            <div class="input-group">
                <label for="expiryDate">Expiry Date</label>
                <input type="text" id="expiryDate" name="expiryDate" class="in" required>
            </div>
            <div class="input-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" class="in" required>
            </div>
			<p>Total Bill is <?php echo $_SESSION['subtotal']; ?></p>
            <input type="submit" value="Pay" class="btn">
            <input type="reset" value="Reset" class="btn">
        </form>
    </div>
    </form>
    <div id="paymentPrompt" class="prompt">
        Payment Successful!
    </div>
	    <script>
        // Function to show payment success prompt
        function showPaymentPrompt() {
            var prompt = document.getElementById("paymentPrompt");
            prompt.style.display = "block"; // Show the prompt
            // Hide the prompt after 3 seconds
            setTimeout(function() {
                prompt.style.display = "none";
            }, 3000); // 3000 milliseconds = 3 seconds
        }
    </script>
</body>
</html>
<?php
if(isset($_POST['pay']))
{
 
    include 'connect.php';
$no=$_POST['card'];
$atm=$_POST['atm'];
$cvv=$_POST['cvv'];
$name=$_POST['name'];
$sql = "INSERT INTO `payment`(`cardno`, `atmpin`, `cvv`, `cardname`) VALUES ('$no','$atm','$cvv','$name')";
$result=mysqli_query($con,$sql);

if($result)
{
   
    $select = "select * from cart where username='$username'";
   
     $query1 = mysqli_query($con, $select);

     while ($row = mysqli_fetch_array($query1)) {
        $name=$row['name'];
        $qty=$row['qty'];
        $price=$row['price'];
        $stot=$row['subtotal'];
        $date=date("Y-m-d");
        $sql="INSERT INTO `selling`(`date`,`name`, `qty`, `price`, `subtotal`) VALUES ('$date','$name','$qty','$price','$stot')";
        $result=mysqli_query($con,$sql);
        
     }
    $dl="DELETE FROM `cart` where username='$username'";
    $r=mysqli_query($con,$dl);
    if($r)
    {
        $name=" ";
        $qty=" ";
        $price=" ";
        $stot=" ";
        $date=" ";
      unset($_SESSION['total']);
      $_SESSION['total']=" ";
        echo "<script>showPaymentPrompt();</script>";

       
    }

}

}


?>