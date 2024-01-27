<?php
include('config.php');
$id = $_GET['id'];

if(isset($_POST["update"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $status = $_POST["status"];

  $update_query = "UPDATE `users` SET `username`='$username',`email`='$email',`password`='$password', `role`='$role', `status`='status' WHERE `id` = '$id' ";

  // INSERT INTO `users` (`sno`, `username`, `password`, `date`, `email`, `status`, `role`) VALUES (NULL, 'shivu@11', 'samy@1311', current_timestamp(), 'shivambisht910@gmail.com', '1', 'admin');

  $result = $conn->query($update_query);
  if($result){
    echo'<script>alert(" update record successfull .");</script>';
    echo '<script>window.location.assign("welcome.php");</script>';
  }
  else{
    echo'<script>alert("Error in Updatation.");</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    h3{
        text-align:center;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #2E59D9;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<?php

$id = $_GET['id'];

$select_query = "SELECT * FROM users WHERE id = '$id' ";
$result = $conn->query($select_query);

$user = $result->fetch_assoc();
$username = $user["username"];
$email = $user["email"];
$password = $user["password"];

?>
  <form method="POST">
    <h3>EDIT USER INFO.</h3>

    <label for="username">Username:</label>
    <input type="text"  name="username" value= "<?php echo $username; ?>">

    <label for="email">Email:</label>
    <input type="email"  name="email" value="<?php echo $email ; ?>" >

    <label for="password">Password:</label>
    <input type="password"  name="password" value="<?php echo $password; ?>" >

    <label for="role">Role:</label>
    <input type="text"  name="role" value="<?php echo $password; ?>" >

    <label for="status">Status:</label>
    <input type="text"  name="Status" value="<?php echo $password; ?>" >

    <button type="submit" name="update">UPDATE</button>
  </form>

</body>
</html>
