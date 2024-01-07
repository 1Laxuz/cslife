<?php

@include 'config.php';
$id = $_GET['updateid'];
$sql = "SELECT * From user_form1 Where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Fname = $row['Fname'];
$Lname = $row['Lname'];
$age = $row['age'];
$email = $row['email'];
//$pass = $row['password'];

$user_type = $row['user_type'];
$year_level = $row['year_level'];
$program_type = $row['program_type'];
if(isset($_POST['submit'])){

   $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
   $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
 //  $pass = md5($_POST['password']);

   $user_type = $_POST['user_type'];
   $year_level = $_POST['year_level'];
   $program_type = $_POST['program_type'];

   $update = "UPDATE user_form1 set id=$id, Fname='$Fname', Lname='$Lname',age='$age', 
   email='$email'/*,password='$pass'*/ Where id=$id";
    $result = mysqli_query($conn, $update);
if($result){
    header('location:display.php');
    echo "Updated Succefully";
}

   /*$select = " SELECT * FROM user_form1 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }
      
      else{
         $insert = "INSERT INTO user_form1(Fname, Lname, age, email, password, user_type, year_level, program_type) VALUES('$Fname',
         '$Lname','$age','$email','$pass','$user_type', '$year_level', '$program_type')";
         $error[] = 'Account Created!';
         echo $_SESSION['id'];
         mysqli_query($conn, $insert);
            header('location:display.php');
      }*/
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
   <!-- custom css file link  -->
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
                    <a href="#">
                        <span class="icon">
                        <span class="material-icons-round">people</span>
                        </span>
                        <span class="title">Students</span>
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
                    <a href="#">
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

<form action="" method="post">
   <h3>Update Form</h3>
   <p>Edit the field that you only want to edit</p>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="text" name="Fname" value=<?php echo $Fname;?> required placeholder="Enter a first name">
   <input type="text" name="Lname" value=<?php echo $Lname;?> required placeholder="Enter a last name">
   <input type="text" name="age" value=<?php echo $age;?> required placeholder="Enter an age">
   <input type="email" name="email" value=<?php echo $email;?> required placeholder="Enter an email">
   <select name="program_type" >
   <option value=<?php echo $program_type;?> disabled selected>Select Program</option>
      <option value="CS">Computer Science</option>
      <option value="IT">Information Technology</option>
      <option value="IS">Information System</option>
   </select>
   <select name="year_level">
   <option value=<?php echo $year_level;?> disabled selected>Select year</option>
      <option value="first">First Year</option>
      
   </select>
  <!-- <input type="password" name="password"value=<?php echo $password;?>  required placeholder="Enter a password">-->
   <select name="user_type">
   <option value=<?php echo $user_type;?> disabled selected>Select user type</option>
      <option value="user">User</option>
      <option value="admin">Admin</option>
   </select>
   <input type="submit" name="submit" value="Update" class="form-btn">
   <a href="display.php" >
               <p>Go back to Students Table</p>
         </a>
</form>
    

    <!-- =========== Scripts =========  -->
    <script src="js/scripts.js"></script>

</div>
</body>
</html>