<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_type'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS:LIFE PORTAL</title>
    <!--google icons Integration-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
        <!-- =============== side_menu ================ -->
    <div class="sideNav">
        <div class="sideNav-branding">
            <img src="img/logo.png" alt="logo">
            <h1>ADMIN PANEL</h1>
        </div>
            <ul>
                <li>
                    <a href="admin_page.php">
                        <span class="icon">
                        <span class="material-icons-round">space_dashboard</span>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="display.php">
                        <span class="icon">
                        <span class="material-icons-round">people</span>
                        </span>
                        <span class="title">View Students</span>
                    </a>
                </li>

                <li>
                    <a href="register.php">
                    <span class="icon">
                         <span class="material-icons-round">group_add</span> 
                         </span> 
                        <span class="title">Add Students</span>
                    </a>
                </li>

                <li>
                    <a href="about.php">
                    <span class="icon">
                        <span class="material-icons-round">help</span>
                        </span> 
                        <span class="title">About</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                    <span class="icon">
                    <span class="material-icons-round">logout</span>
                    </span> 
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
    </div>
    
        <!-- =============== TOP NAV ================ -->
    <div class="headerNav">
            <div class="headerNavtopbar">
            <div class="toggle">
                <span class="material-icons-round">menu</span>
            </div>
                <div class="headings">
                    <h1>CS : LIFE</h1>
                </div>

                <div class="user">
                
                    <img src="img/software-engineer.png" alt="">
                </div>
            </div>
    </div>

            <!-- ======================= Cards ================== -->
    <div class="cardGroup">
                <div class="cardStatus">
                    <div>
                        <div class="cardNumber">1,504</div>
                        <div class="cardName">Total Students</div>
                    </div>
                </div>
                <div class="cardStatus">
                    <div>
                        <div class="cardNumber">80</div>
                        <div class="cardName">Quiz result</div>
                    </div>
                </div>
                <div class="cardStatus">
                    <div>
                        <div class="cardNumber">284</div>
                        <div class="cardName">Cdasdas</div>
                    </div>
                </div>
                <div class="cardStatus">
                    <div>
                        <div class="cardNumber">s2</div>
                        <div class="cardName">Edasdasd</div>
                    </div>
                </div>  
    </div>

                <!-- ================= MAINNN ================ -->
        <div class="mainBoard">
                <div class="cardMain">
                    <div>
                        <div class="cardName">New Students</div>
                    </div>
                    <div class="cardIcon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="cardMain">
                    <div>
                        <div class="cardName">Analytics</div>
                    </div>
                    <div class="cardIcon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
        </div>
    

    <!-- =========== Scripts =========  -->
    <script src="js/scripts.js"></script>
</body>

</html>