<?php
include('config.php');
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $sql = "INSERT INTO `users`(`username`, `email`, `password`, `role`) VALUES ('$username','$email','$password', '$role')";

    //   INSERT INTO `users` (`sno`, `username`, `password`, `date`, `email`, `status`, `role`) VALUES (NULL, 'shivu@11', 'samy@1311', current_timestamp(), 'shivambisht910@gmail.com', '1', 'admin');

    $result = $conn->query($sql);
    if ($result) {
        echo '<script>alert("successfull registration");</script>';
        header("Location:./welcome.php");
    } else {
        echo '<script>alert("Error in registration");</script>';
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

        h3 {
            text-align: center;
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

    <form action="new-user.php" method="POST">
        <h3>ADD NEW USER </h3>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="password">User role:</label>
        <input type="text" id="role" name="role" required>

        <button type="submit" name="submit">Add User</button>
    </form>

</body>

</html>