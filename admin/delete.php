<?php 
include("config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn,$delete);

    if($result){
        echo '<script>alert("user deleted");</script>';
        echo'<script> window.location.assign("welcome.php");</script>';
    }
    else{
        echo"Error Deleting Record";
    }
}

?>