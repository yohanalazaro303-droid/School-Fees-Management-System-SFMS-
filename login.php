<?php
session_start();
include('config/connection.php');

$message = '';

if(isset($_POST['login'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        header("Location: dashboard.php");
        exit();

    }else{
        $message = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

<div class="login-container">

    <h2>School Fees Management System</h2>

    <?php if(!empty($message)){ ?>
        <p class="error"><?php echo $message; ?></p>
    <?php } ?>

    <form method="POST">

        <label>Username</label>
        <input type="text" name="username" required><br>

        <label>Password</label>
        <input type="password" name="password" required><br>

        <button type="submit" name="login"> Login </button>

    </form>

</div>

</body>
</html>