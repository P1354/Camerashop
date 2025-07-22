<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>camera lens</title>
    <style>
Here's the redesigned CSS with warm colors and improved styling:


```css
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    border: none;
    outline: none;
}

.main {
            display: flex;
            flex-direction: column;
            background: url('img3.jpg');
            min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(img3.webp);
        background-size: cover;
        background-position: center;
            

        }

body {
    color: #000; /* Black text color */
    background-image:  url(img3.webp);
        background-size: cover;
        background-position: center;
}

header {
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1000;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 28px 11%;
    border-bottom: 1px solid transparent;
    transition: all ease .50s;
    background-color: #E76F51; /* Warm header background color */
}

p {
    font-size: 2rem;
    font-weight: 600;
}

.navlist {
    display: flex;
    align-items: center;
}

.navlist a {
    color: #ffffff;
    font-size: 2rem;
    font-weight: 600;
    margin: 0 40px;
    transition: all ease .40s;
}

.navlist a:hover {
    color: #FFD166; /* Warm link hover color */
}

section {
    padding: 120px 19% 100px;
}

span {
    color:rgb(191, 102, 255); /* Warm span color */
}

.btn2 {
    height: 40px;
    width: 100px;
    background: #E76F51; /* Warm button background color */
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    border: 2px solid #000;
    transition: all .50s;
    border-radius: 10px;
}

.btn2:hover {
    transform: translateX(5px);
    background: #FFD166; /* Warm button hover background color */
}

header.sticky {
    padding: 15px 11%;
    background: #000;
    border-bottom: 1px solid #4e5055;
}

.btn-header {
    background-color: #E76F51; /* Warm button background color */
    color: #ffffff;
    text-decoration: none;
    font-size: 25px;
    margin-left: 25px;
    font-weight: bolder;
    border-radius: 20px;
    transition: transform .4s;
    height: 50px;
    width: 150px;
}

.btn-header:hover {
    background-color: #FFD166; /* Warm button hover background color */
}

.sub {
   
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 50px;
}

.food {
    background-color:white; /* Warm food box background color */
    color: #000;
    gap: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 250px;
    width: 200px;
    margin: 20px;
    border-radius: 20px;
}

img {
    border-radius: 20px;
}

#quantity {
    width: 100px;
    padding: 5px;
    font-size: 14px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 3px;
    transition: border-color 0.3s;
}

#quantity:focus {
    border-color: #007bff;
    outline: none;
}
.back-to-home {
    text-align: center;
    margin-top: 50px;
}

.back-to-home a {
    background-color: #333;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 10px;
    transition: background-color 0.4s;
}

.back-to-home a:hover {
    background-color: #666;
}
    </style>
	
</head>

<body>
    <!--header section -->

      
            
         <?php
            include 'nav.php';
         ?>
       
       <form action="home.php" method="post">
    <section class="buy">
    <div class="main" id="food">
        <div class="sub">
        <?php
     $host="localhost";
     $user="root";
     $pass="";
     $db="camera";
     $conn=mysqli_connect($host,$user,$pass,$db);
     $sql="SELECT * FROM `camera` where type='SSD card'";
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result))
     {

     
    ?>
          </form>  <div class="food">
                <form action="in_cart.php" method="post">
                <div>
                    <img src="<?php echo $row['photo']; ?>" height="100px" width="100px">
                    
            </div>
                <div>
                  <?php echo $row['name'];?>
                 
                </div>
                <div class="quantity">
                <input type="number" id="quantity" name="quantity" min="1" max="10" step="1" value="1">                
                <input type="text" value="<?php echo $row['name'] ?>"  hidden name="name">
                <input type="text" value="<?php echo $row['price'] ?>" hidden name="price">
                </div>              
                <div>Price:
                <?php echo $row['price'];?>
                </div>
                <div>
                    <button class="btn2"  name="buy">
                   Shop
                    </button>
                </div>
            </div>
           
            </form>
            <?php
			}
			?>

        </div>
			<div class="back-to-home">
        <a href="cate.php">Back to Categories</a>
    </div>
    </div>
    </section>

</body>

</html>

