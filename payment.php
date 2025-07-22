<?php
session_start();
include 'connect.php';

// Check if username and total are set
if (!isset($_SESSION['username']) || !isset($_SESSION['total'])) {
    header('Location: home.php');
    exit();
}

$username = $_SESSION['username'];
$total = $_SESSION['total'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pay by Debit Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }

        .pay {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            margin: 0 auto;
        }

        .pay h3 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-weight: bold;
            font-size: 18px;
        }

        .input-group input[type="text"],
        .input-group input[type="password"] {
            width: 100%;
            height: 40px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .input-group input[type="submit"],
        .input-group input[type="reset"] {
            width: 49%;
            height: 40px;
            border: none;
            background-color: #108A4F;
            color: #fff;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .input-group input[type="submit"]:hover,
        .input-group input[type="reset"]:hover {
            background-color: #0e6f3e;
        }

        .btn-home {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #108A4F;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        .btn-home:hover {
            color: #0e6f3e;
        }
    </style>
</head>

<body>
    <form id="paymentForm" action="payment.php" method="post">
        <div id="DebitCard" class="pay">
            <h3>Pay by Debit Card</h3>
            <div class="input-group">
                <label for="card">Card Number</label>
                <input type="text" id="card" name="card" placeholder="Enter Card Number" required>
            </div>
            <div class="input-group">
                <label for="atm">ATM Pin</label>
                <input type="password" id="atm" name="atm" placeholder="Enter ATM Pin" required>
            </div>
            <div class="input-group">
                <label for="cvv">CVV/CVC</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
            </div>
            <div class="input-group">
                <label for="name">Card Holder Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Card Holder Name" required>
            </div>
            <div class="input-group">
                <h2>Total Bill is ₹<?php echo $total; ?></h2>
            </div>
            <div class="input-group">
                <input type="submit" value="Pay" name="pay">
                <input type="reset" value="Reset">
            </div>
            <a href="home.php" class="btn-home">Go to Home</a>
        </div>
    </form>
</body>

</html>

<?php
// Process form submission
if (isset($_POST['pay'])) {
    $no = mysqli_real_escape_string($con, $_POST['card']);
    $atm = mysqli_real_escape_string($con, $_POST['atm']);
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);
    $name = mysqli_real_escape_string($con, $_POST['name']);

    // Validate form fields
    if (!empty($no) && !empty($atm) && !empty($cvv) && !empty($name)) {
        // Insert payment details into `payment` table
        $sql = "INSERT INTO `payment`(`cardno`,`atmpin`,`cvv`,`cardname`) VALUES ('$no','$atm','$cvv','$name')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // Move data from `cart` to `selling`
            $select = "SELECT * FROM cart WHERE username='$username'";
            $query1 = mysqli_query($con, $select);

            while ($row = mysqli_fetch_array($query1)) {
                $prodName = mysqli_real_escape_string($con, $row['name']);
                $qty = (int)$row['qty'];
                $price = (float)$row['price'];
                $stot = (float)$row['subtotal'];
                $date = date("Y-m-d");

                $sqlSelling = "INSERT INTO `selling`(`date`, `name`, `qty`, `price`, `subtotal`) 
                                VALUES ('$date', '$prodName', '$qty', '$price', '$stot')";
                mysqli_query($con, $sqlSelling);
            }

            // Clear cart after successful payment
            $dl = "DELETE FROM `cart` WHERE username='$username'";
            $r = mysqli_query($con, $dl);

            if ($r) {
                unset($_SESSION['total']);
                echo "<script>
                        alert('Payment Successful! Redirecting to home...');
                        window.location.href='home.php';
                      </script>";
            } else {
                echo "<script>alert('Error clearing cart. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('Payment failed. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Please fill all the fields correctly.');</script>";
    }
}
?>
