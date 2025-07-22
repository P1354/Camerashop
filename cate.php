<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('img4.webp');
        }
        .categories-dropdown-content{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 800px;
            gap: 30px;
        }
        .categories-dropdown-content div{
            height: 200px;
            width: 300px;
            border-radius: 26px;
background:rgb(161, 204, 210);
box-shadow:  5px 5px 10pxrgb(136, 182, 201),
             -5px -5px 10pxrgb(171, 221, 235);
        }

        a{
            font-size: 2rem;
            color: black;
            text-decoration: none;
        }
        .categories-dropdown-content div {
            display: flex;

            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<div id="categoriesDropdown" class="categories-dropdown-content">
            <div><a href="lens.php">Lens</a></div>
            <div> <a href="potriatlens.php">Potrait Lens</a></div>
            <div> <a href="Tripod.php">Tripod</a></div>
            <div><a href="ssdcard.php">SSD Card</a></div>
            <div> <a href="camerabag.php">Camera Bag</a></div>
            <div> <a href="battery.php">Battery</a></div>
			<div> <a href="Home.php">Back To Home</a></div>  
        </div>
</body>
</html>