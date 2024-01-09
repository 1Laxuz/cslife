<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form1 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['user_type'] = 'admin';

         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){
         $_SESSION['user_type'] = 'user';
         
         header('location:user_page.php');
      }  
   }else{
      $error[] = 'incorrect email or password!';
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log In Form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- <div class="form-container">  
   <form action="" method="post">
      <h3>LOG IN</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="LOG IN" class="form-btn">
      
   </form>
   
   
</div> -->
<div class="logins">
<form action="" method="post">

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
<section class="">
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center">
      
        
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <h1>CS : LIFE PORTAL</h1>
            <h3>LOG IN</h3>
              <p class="text-white-50 mb-5">Please enter your email and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" class="form-control form-control-lg" name="email" required placeholder="Enter your email">
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" class="form-control form-control-lg" name="password" required placeholder="Enter your password">
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <input type="submit" button class="btn btn-outline-success btn-lg px-5"  name="submit"></button>

            </div>
          </div>
        
      </div>
    </div>
  </div>
  
</section>
</form>
</div>

</body>
</html>