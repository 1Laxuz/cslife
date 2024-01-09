<?php
include 'config.php';

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS:LIFE PORTAL</title>
    <!--google icons Integration-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php if(isset($_SESSION['user_type'])){
    $user_type = $_SESSION['user_type'];

    // Customized content based on user authority
    if($user_type === 'admin'){
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
            <div class="form-container">
        <div class="message">
        <p>Welcome to our web portal!<br><br>
At CS : LIFE, we're not just about the game; we're about empowering users through insightful data and personalized experiences.<br>
Our platform goes beyond the gameplay, focusing on your journey and progress within the game. We understand the importance of knowing where you excel and where there's room for growth.
We've integrated a robust web portal that centralizes your game scores and user data. <br><br>Why? Because we believe that understanding your strengths and areas for improvement is crucial for personal growth. As cited by Teasley (2017), this integration from various information systems into tailored dashboards can transform feedback into a positive force and maximize the advantages of such systems.
<br><br>But it's not just about the players; our portal also caters to educators. We recognize the significance of a comprehensive view of students' collaborative efforts and learning paths (Chen et al., 2021). By offering analytics and insights, we support teachers in grasping their students' dynamics and adapting classroom practices, which, as Xhakaj et al. (2017) highlighted, significantly enhances student outcomes.
<br><br>Our mission is simple: empower both students and educators. Our portal enables them to track their progress, fine-tune their approaches, and achieve better outcomes collaboratively. We believe that by leveraging data, everyone involved can foster a more enriching and effective learning experience.
<br><br>Join us on this journey of personalized growth and continual improvement. At CS : LIFE PORTAL, your data isn't just numbers; it's a pathway to success.</p>
</div>
    </div>
    <div class="backer">
    <button class="btn btn-primary"><a href="admin_page.php" class="text-light">Back</a>
    </button>
    </div>

        <?php
    } elseif($user_type === 'user'){
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS:LIFE PORTAL</title>
    <!--google icons Integration-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

        <!-- =============== side_menu ================ -->
    <div class="sideNav">
        <div class="sideNav-branding">
            <img src="img/logo.png" alt="logo">
            <h3>STUDENT PANEL</h3>
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
                    <a href="file_upload.php">
                    <span class="icon">
                        <span class="material-icons-round">drive_folder_upload</span>
                        </span> 
                        <span class="title">File Upload</span>
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
                
                    <img src="img/WIN_20230614_14_57_34_Pro.jpg" alt="">
                </div>
            </div>
    </div>
    
    <div class="form-container">
        <div class="message">
        <p>Welcome to our web portal!<br><br>
At CS : LIFE, we're not just about the game; we're about empowering users through insightful data and personalized experiences.<br>
Our platform goes beyond the gameplay, focusing on your journey and progress within the game. We understand the importance of knowing where you excel and where there's room for growth.
We've integrated a robust web portal that centralizes your game scores and user data. <br><br>Why? Because we believe that understanding your strengths and areas for improvement is crucial for personal growth. As cited by Teasley (2017), this integration from various information systems into tailored dashboards can transform feedback into a positive force and maximize the advantages of such systems.
<br><br>But it's not just about the players; our portal also caters to educators. We recognize the significance of a comprehensive view of students' collaborative efforts and learning paths (Chen et al., 2021). By offering analytics and insights, we support teachers in grasping their students' dynamics and adapting classroom practices, which, as Xhakaj et al. (2017) highlighted, significantly enhances student outcomes.
<br><br>Our mission is simple: empower both students and educators. Our portal enables them to track their progress, fine-tune their approaches, and achieve better outcomes collaboratively. We believe that by leveraging data, everyone involved can foster a more enriching and effective learning experience.
<br><br>Join us on this journey of personalized growth and continual improvement. At CS : LIFE PORTAL, your data isn't just numbers; it's a pathway to success.</p>
</div>
    </div>
    <div class="backer">
    <button class="btn btn-primary"><a href="user_page.php" class="text-light">Back</a>
    </button>
    </div>
    </div>
<?php
    }
} 
?>

 

    <!-- =========== Scripts =========  -->
    <script src="js/scripts.js"></script>

    
</body>
</html>