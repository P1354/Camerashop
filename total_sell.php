

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Sales</title>
    <style>
      
       
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Navigation Bar */
.left-navigation {
    background-color: #002B46;
    padding: 0 20px;
}

.left-navigation ul {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    height: 60px;
    list-style: none;
}

.left-navigation ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    padding: 8px 12px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.left-navigation ul li a:hover {
    background-color: #108A4F;
    border-radius: 5px;
    color: #fff;
}

/* Main Section */
.main {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #00a3c8;
    padding: 50px 20px;
    min-height: 100vh;
}

.main-top h1 {
    color: #fff;
    text-decoration: underline;
    margin-bottom: 20px;
}

/* Table Header */
.thead {
    width: 100%;
    max-width: 1000px;
    margin-top: 20px;
}

.th, .contain {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: darkblue;
    color: #fff;
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 10px;
    width: 100%;
}

.th div, .contain div {
    width: 20%;
    text-align: center;
    font-size: 1.2rem;
    font-weight: 500;
}

/* Table Content */
.contain {
    background-color: #191c24;
    transition: background-color 0.3s ease;
}

.contain:hover {
    background-color: #2a2f3d;
}

/* Total Section */
.total-container {
    margin-top: 20px;
    background-color: #fff;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-size: 1.4rem;
    font-weight: bold;
}

/* Button Styling */
.btn1 {
    background-color: #108A4F;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn1:hover {
    background-color: #0c6a3e;
}

/* Responsive Design */
@media (max-width: 768px) {
    .left-navigation ul {
        flex-direction: column;
        height: auto;
    }

    .left-navigation ul li {
        margin: 10px 0;
    }

    .th, .contain {
        flex-direction: column;
        gap: 10px;
    }

    .th div, .contain div {
        width: 100%;
    }

    .main-top h1 {
        font-size: 1.8rem;
    }
}

     
    
    </style>
</head>
<body>
<div class="left-navigation">
    <ul>
    <li><a  href="#">Admin</a></li>
    <li><a  href="admin.php">Today Selling</a></li>
        <li><a  href="total_sell.php">Total selling</a></li>
        <li><a href="insert_camera.php">Insert Camera Accessories</a></li>
       
        <li>
            <!-- Add a class to the button for styling and reference in JavaScript -->
            <a href="delete_camera.php" class="categories-button" id="m" >Delete Camera Accessories</a>
      
            <!-- Categories dropdown content -->
           
        </li>
        <li><a href="alogout.php">Logout</a></li>
    </ul>
 </div>

 <section class="main" id="today">
        <div class="main-top">
                <h1 style="color: #fff; text-decoration:underline; margin-bottom:20px;margin-left:250px;">Total Sell </h1>
            </div>
            <div class="thead">
        <div class="th">
            <div> Accessories Name</div>
            <div>Qty</div>
            <div>price</div>
            <div>Total</div>
         
            
           
            
           
        </div>
        <?php
    include 'connect.php';
    $d= date("Y-m-d");
    $sql = "SELECT * FROM `selling`  ";
    $result = mysqli_query($con, $sql);
    $total=0;
    if ($result) 
    {
        while ($row = mysqli_fetch_array($result)) {
            $total=$total+$row['subtotal'];
    ?>
            <div class="contain">
            <div><?php echo $row['name']; ?></div>
            <div><?php echo $row['qty']; ?></div>
            <div><?php echo $row['price']; ?></div>
            <div><?php echo $row['subtotal']; ?></div>
          
        
        
            
          
               
        </div>
            <?php
        }}
        ?>
    </div>
    <div >
           <center> <h1><div>Today Total: Rs.<?php echo $total; ?></div></h1></center>
    </div>
        </section>
      
            


</body>
</html>