<?php
    include './config.php';
    $message='';

    if(!empty($_POST['username']) && !empty($_POST['password'])):
        if($_POST['password'] == $_POST['confirm_password'])
        {
            //Enter new user in the database
            $sql ="INSERT INTO employee_records (username, password, emp_lname, emp_fname, emp_middle)
                     VALUES (:username, :password, :lname, :fname, :middle)";
            $stmt=$conn->prepare($sql);
            $pass = $_POST['password'];
            $stmt->bindParam(':username', $_POST['username']);
            $stmt->bindParam(':password', $_POST['password']);
            $stmt->bindParam(':lname', $_POST['lname']);
            $stmt->bindParam(':fname', $_POST['fname']);
            $stmt->bindParam(':middle', $_POST['middle']);

            
                    if($stmt->execute() ):
                        $message = 'Successfully created new user!';
                    else:
                        $message = 'Fail';
                    endif;
                }
                else
                {
                    $message='Password did not match';
                }

    endif;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Register Below</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/employee2/assets/css/style2.css">
</head>
<body>
    
    <header>
    <div class="header">
        <ul>
        <a href="index.php">Registration page</a>
        </ul>
    </div>
    </header>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Register</h1>
    <span>or <a href="login.php">Login here</a></span>

    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">
        <input type="text" placeholder="Last Name" name="lname">
        <input type="text" placeholder="First Name" name="fname">
        <input type="text" placeholder="Middle Name" name="middle">

        <input type="submit">

    </form>

</body>
</html>