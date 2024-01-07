<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $delete = "DELETE FROM user_form1 WHERE id = '$id'";
    $result = mysqli_query($conn,$delete);
    if($result){
        header('location:display.php');
        echo "Deleted Succefully";
    }
}
?>
 