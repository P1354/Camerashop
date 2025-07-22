<!-- homepage.php -->
<?php

session_start();
$username=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sperk Camera </title>
    <style>
        * {
            padding: 0;
            margin: 0;
           
        }

        .main {
            display: flex;
            flex-direction: column;
            background-color: #108A4F;
            background: url('img3.jpg');
            min-height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(img3.webp);
        background-size: cover;
        background-position: center;
            

        }

        .left-navigation ul {
            display: flex;
            background-color:rgb(12, 13, 13);
            color:black;
            height: 60px;
            font-size: 1.3rem;
            justify-content: space-evenly;
            align-items: first baseline;
        }

        #categoriesDropdown {
            display: flex;
            flex-direction: column;
            opacity: 0;

            position: absolute;

        }

        #categoriesDropdown:hover {
            opacity: 100;
            position: relative;
        }

        #categoriesDropdown a {
            color: black;
        }

        .left-navigation ul li {
            list-style: none;
        }

        .left-navigation ul li a {

            list-style: none;
            color: black;
            text-decoration: none;

        }

        .footer {
            background-color: #000;
        }

        .welcome-section {
            height: 680px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;

        }

        #wel {
            font-size: 6rem;
           
        }

        #wel span {
            color: #DE6F37;
        }

        #wel2 {
            color: #fff;
            font-size: 2rem;
        }

        .categories-section {
            display: flex;
        }

        .footer ul {
            display: flex;
            gap: 20px;
            font-size: 1.5rem;
            color: white;
            justify-content: center;
        }

        .footer a {
            text-decoration: none;
            color: white;
        }

        .footer ul li {
            list-style: none;
        }

        .main-content {
            display: flex;
            flex-direction: column;

        }

        .lr {
            display: flex;
        }

        /* button */
        .container-button {
            margin-top: 50px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  grid-template-areas: "bt-1 bt-2 bt-3"
    "bt-4 bt-5 bt-6";
  position: relative;
  perspective: 800;
  padding: 0;
  width: 135px;
  height: 47px;
  transition: all 0.3s ease-in-out;
}

.container-button:active {
  transform: scale(0.95);
}

.hover {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 200;
}

.bt-1 {
  grid-area: bt-1;
}

.bt-2 {
  grid-area: bt-2;
}

.bt-3 {
  grid-area: bt-3;
}

.bt-4 {
  grid-area: bt-4;
}

.bt-5 {
  grid-area: bt-5;
}

.bt-6 {
  grid-area: bt-6;
}

.bt-1:hover ~ button {
  transform: rotateX(15deg) rotateY(-15deg) rotateZ(0deg);
  box-shadow: -2px -2px #18181888;
}

.bt-1:hover ~ button::after {
  animation: shake 0.5s ease-in-out 0.3s;
  text-shadow: -2px -2px #18181888;
}

.bt-3:hover ~ button {
  transform: rotateX(15deg) rotateY(15deg) rotateZ(0deg);
  box-shadow: 2px -2px #18181888;
}

.bt-3:hover ~ button::after {
  animation: shake 0.5s ease-in-out 0.3s;
  text-shadow: 2px -2px #18181888;
}

.bt-4:hover ~ button {
  transform: rotateX(-15deg) rotateY(-15deg) rotateZ(0deg);
  box-shadow: -2px 2px #18181888;
}

.bt-4:hover ~ button::after {
  animation: shake 0.5s ease-in-out 0.3s;
  text-shadow: -2px 2px #18181888;
}

.bt-6:hover ~ button {
  transform: rotateX(-15deg) rotateY(15deg) rotateZ(0deg);
  box-shadow: 2px 2px #18181888;
}

.bt-6:hover ~ button::after {
  animation: shake 0.5s ease-in-out 0.3s;
  text-shadow: 2px 2px #18181888;
}

.hover:hover ~ button::before {
  background: transparent;
}

.hover:hover ~ button::after {
  content: "Camera";
  top: -150%;
  transform: translate(-50%, 0);
  font-size: 34px;
  color: #f19c2b;
}

button {
  position: absolute;
  padding: 0;
  width: 135px;
  height: 47px;
  background: transparent;
  font-size: 17px;
  font-weight: 900;
  border: 3px solid #f39923;
  border-radius: 12px;
  transition: all 0.3s ease-in-out;
}

button::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 135px;
  height: 47px;
  background-color: #f5ae51;
  border-radius: 12px;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}

button::after {
  content: "Shop";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 135px;
  height: 47px;
  background-color: transparent;
  font-size: 17px;
  font-weight: 900;
  line-height: 47px;
  color: #ffffff;
  border: none;
  border-radius: 12px;
  transition: all 0.3s ease-in-out;
  z-index: 2;
}

@keyframes shake {
  0% {
    left: 45%;
  }

  25% {
    left: 54%;
  }

  50% {
    left: 48%;
  }

  75% {
    left: 52%;
  }

  100% {
    left: 50%;
  }
}
    </style>
</head>

<body>
    <div class="main">
        <?php
        include 'nav.php';
        ?>
        <div class="main-content">
            <div class="welcome-section">
            <p id="wel2">Hello User,
            <?php echo $username ?></p>
                <p id="wel"><span>W</span>elcome <span>T</span>o <span>S</span>perk <span>C</span>amera <span>W</span>ebsite</p>
                <p id="wel2">Explore a wide Accessories of camera  for your studio.</p>
                <p>
                    <a href="cate.php">
                <div class="container-button">
                    <div class="hover bt-1"></div>
                    <div class="hover bt-2"></div>
                    <div class="hover bt-3"></div>
                    <div class="hover bt-4"></div>
                    <div class="hover bt-5"></div>
                    <div class="hover bt-6"></div>
                    <button></button>
                </div>
                </a>
                </p>
            </div>
        </div>
<div class="footer" style="color: white; text-align: center;">
    <ul>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <p style="margin-top: 10px;">Visit Us At:</p>
    <p style="margin-top: 5px;">Maruti Solaris PVR , Anand - Janta Rd,  Gujarat 388120</p>
     <p style="margin-top: 5px;">Phone: +1234567890</p>
     <p style="margin-top: 5px;">Email: nurseryshop@gmail.com</p>
</div>
</body>

</html>