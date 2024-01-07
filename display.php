<?php
    @include 'config.php'
    ?>

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>CRUD</title>
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
    <div class="displayer">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">User Type</th>
      <th scope="col">Program Type</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = "SELECT * FROM user_form1";
    $result = mysqli_query($conn,$select); 
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $Fname = $row['Fname'];
            $Lname = $row['Lname'];
            $age = $row['age'];
            $email = $row['email'];
            $user_type = $row['user_type'];
            $program_type = $row['program_type'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$Fname.'</td>
            <td>'.$Lname.'</td>
            <td>'.$age.'</td>
            <td>'.$email.'</td>
            <td>'.$user_type.'</td>
            <td>'.$program_type.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>'; 
        }
        }
    ?>
  </tbody>
</table>
<button class="btn btn-primary"><a href="register.php" class="text-light">Add new user</a>
    </button>
    </div>
   
    
      <!-- =========== Scripts =========  -->
      <script src="js/scripts.js"></script>
</body>
</html>