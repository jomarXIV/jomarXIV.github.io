<?php

    session_start();
    require 'config.php';

    if(!empty($_POST['username']) && !empty($_POST['password'])):
        $records=$conn->prepare('SELECT uid,username,password FROM employee_records WHERE username = :username');
        $records->bindParam(':username', $_POST['username']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        
        $message='';

        if($_POST['password'] == $results['password'])
        {
         $_SESSION['user_id'] = $results['uid'];
          header('location: main.php');
        }
        else
        {
            $message='Login Failed!';
        }

    endif;
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login Below</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/employee2/assets/css/style2.css">
</head>
<body>

    <header>
        <div class="header">
            <ul>
            <a href="index.php">Login page</a>
            </ul>
        </div>
    </header>


    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Sign-In</h1>
    <span>or <a href="register.php">Register here</a></span>

    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">


        <input type="submit" value="Login">
    </form>

</body>
</html>