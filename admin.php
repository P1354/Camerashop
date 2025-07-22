

         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>camaea accessories</title>
    <style>
      
       /* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Root Variables */
:root {
    --primary-color: #007BFF;
    --secondary-color: #28a745;
    --dark-color: #343a40;
    --light-color: #f8f9fa;
    --accent-color: #17a2b8;
    --text-color: #333;
    --font-family: 'Poppins', sans-serif;
}

/* General Styles */
body {
    font-family: var(--font-family);
    background-color: var(--light-color);
    color: var(--text-color);
    line-height: 1.6;
}

/* Navigation Styles */
.left-navigation {
    background-color: var(--dark-color);
    padding: 10px 0;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.left-navigation ul {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    list-style: none;
    height: 60px;
}

.left-navigation ul li {
    list-style: none;
}

.left-navigation ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    padding: 10px 15px;
    transition: color 0.3s ease-in-out, transform 0.3s;
}

.left-navigation ul li a:hover {
    color: var(--accent-color);
    transform: translateY(-3px);
}

/* Main Section Styles */
.main {
    background-color: var(--light-color);
    padding: 50px 5%;
    text-align: center;
}

.main h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: var(--primary-color);
   
}

/* Table Header */
.th {
    display: flex;
    justify-content: space-between;
    background-color: var(--primary-color);
    color: white;
    padding: 10px 20px;
    border-radius: 8px 8px 0 0;
    margin-bottom: 5px;
}

.th div {
    font-size: 1.2rem;
    font-weight: bold;
    width: 150px;
}

/* Data Rows */
.contain {
    display: flex;
    justify-content: space-between;
    background-color: white;
    color: var(--text-color);
    padding: 12px 20px;
    border-bottom: 1px solid #ddd;
    transition: background-color 0.3s;
}

.contain:hover {
    background-color: #f1f1f1;
}

.contain div {
    font-size: 1.1rem;
    width: 150px;
}

/* Button Styles */
.button {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.btn1 {
    background-color: var(--secondary-color);
    color: white;
    padding: 12px 25px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn1:hover {
    background-color: #218838;
    transform: translateY(-3px);
}

/* Admin Section */
#today {
    margin-top: 20px;
}

/* Footer Styles */
.footer {
    text-align: center;
    padding: 20px;
    background-color: var(--dark-color);
    color: white;
    margin-top: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .left-navigation ul {
        flex-direction: column;
        height: auto;
    }

    .th, .contain {
        flex-direction: column;
        gap: 10px;
        padding: 15px;
    }

    .th div, .contain div {
        width: 100%;
        text-align: center;
    }

    .main h1 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .left-navigation ul li a {
        font-size: 1rem;
        padding: 8px 12px;
    }

    .btn1 {
        width: 100%;
    }

    .main h1 {
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
            <a href="delete_camera.php" class="categories-button" id="m" >Delete Camera Accessories</a>
        </li>
        <li><a href="alogout.php">Logout</a></li>
        
    </ul>
 </div>

 <section class="main" id="today">
        <div class="main-top">
        <h1 style="color: #fff; text-decoration:underline; margin-bottom:20px;margin-left:250px;">Today </h1>
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
    $sql = "SELECT * FROM `selling` WHERE date='$d'";
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