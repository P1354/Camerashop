
<?php

session_start();


?>
<?php
if(isset($_POST['delete']))
{
  include 'connect.php';
$id=$_POST['id'];



$sql="delete from camera where id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header('location:delete_camera.php');
}
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
     /* Global Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Root Variables */
:root {
    --bg-color: #f4f4f4;
    --nav-bg-color: #002B46;
    --main-color: #108A4F;
    --hover-color: #0c6a3e;
    --accent-color: #00a3c8;
    --text-color: #333;
    --white: #fff;
    --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s ease;
}

/* Body & Main Wrapper */
body {
    background-color: var(--bg-color);
    font-family: Arial, sans-serif;
    color: var(--text-color);
    line-height: 1.6;
}

/* Main Section */
.main {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: var(--main-color);
    padding: 50px 20px;
    min-height: 100vh;
}

/* Navigation Bar */
.left-navigation ul {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: var(--nav-bg-color);
    height: 60px;
    list-style: none;
    padding: 0 20px;
}

.left-navigation ul li {
    list-style: none;
}

.left-navigation ul li a {
    color: var(--white);
    text-decoration: none;
    font-size: 1.2rem;
    padding: 8px 15px;
    border-radius: 5px;
    transition: var(--transition);
}

.left-navigation ul li a:hover {
    background-color: var(--main-color);
    color: var(--white);
}

/* Categories Dropdown */
#categoriesDropdown {
    display: none;
    position: absolute;
    background-color: var(--nav-bg-color);
    box-shadow: var(--shadow);
    border-radius: 5px;
    z-index: 1000;
}

#categoriesDropdown a {
    padding: 10px 15px;
    color: var(--white);
    text-decoration: none;
    display: block;
    transition: var(--transition);
}

#categoriesDropdown a:hover {
    background-color: var(--main-color);
}

/* Logo */
.logo {
    font-size: 40px;
    font-weight: bold;
    color: var(--text-color);
}

.logo span {
    color: red;
}

/* Form Sections */
.insert,
.plant {
    margin-top: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.insert {
    margin-left: 0;
}

.plant {
    margin-left: 0;
    margin-top: 20px;
}

/* Pay Section */
.pay {
    background-color: #93c6ad80;
    padding: 40px;
    width: 100%;
    max-width: 500px;
    border-radius: 10px;
    box-shadow: var(--shadow);
}

/* Input Fields */
.in {
    width: 100%;
    height: 45px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: var(--transition);
    font-size: 1rem;
}

/* Input Focus State */
.in:focus {
    border-color: var(--accent-color);
    outline: none;
    box-shadow: 0 0 8px rgba(0, 163, 200, 0.5);
}

/* Button Styles */
.btn {
    width: 100%;
    max-width: 150px;
    height: 45px;
    background-color: var(--main-color);
    color: var(--white);
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: var(--transition);
    margin-top: 10px;
}

.btn:hover {
    background-color: var(--hover-color);
}

/* Table Styles */
table {
    width: 100%;
    max-width: 800px;
    margin-top: 20px;
    border-collapse: collapse;
    box-shadow: var(--shadow);
}

table th,
table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: var(--nav-bg-color);
    color: var(--white);
    font-size: 1.1rem;
    text-transform: uppercase;
}

/* Alternate Row Colors */
table tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover Effect for Rows */
table tr:hover {
    background-color: #ddd;
}

/* Responsive Design */
@media (max-width: 768px) {
    .left-navigation ul {
        flex-direction: column;
        height: auto;
        padding: 20px 0;
    }

    .left-navigation ul li {
        margin-bottom: 10px;
    }

    .pay {
        width: 90%;
        padding: 30px;
    }

    .insert,
    .plant {
        margin-top: 20px;
    }

    .btn {
        width: 100%;
    }

    table {
        width: 100%;
    }

    table th,
    table td {
        padding: 8px;
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
<div class="insert">
	
<form action="delete_camera.php" method="post">
	<div id="DebitCard"  class="pay">
		<h3>Delete Camera Accessories Detail</h3>
        <br>
        <br>
		<p>Enter Camera Accessories Id</p>
        <input type="text" name="id" placeholder="Camera Accessories Id" class="in">
        <br>
		
        <input type="submit" value="Delete" name="delete" class="btn">
       
		<input type="reset" value="Reset" class="btn">
	</div>

	</form>
 </div>
 <div class="plant">
 <caption></caption>
 <table border="1">
   
    <tr>
    <th>id</th>
    <th>Name</th>
    </tr>
 
        <?php
        include 'connect.php';
        $sql="select * from camera";
        $r=mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($r)) {
        ?>   <tr>
        <th><?php echo $row['id'];?></th>
        <th><?php echo $row['name'];?></th>
    </tr>
    <?php } ?>
  </table>
 </div>
</body>
</html>
