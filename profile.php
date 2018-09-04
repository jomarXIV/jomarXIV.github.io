<?php
    include './config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM mock_data WHERE id=:id";
    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(":id", $id);

    if($stmt->execute()){
        $employee = $stmt->fetch(PDO::FETCH_OBJ);
    }

    $sql = "SELECT * FROM mock_data WHERE country IN (:country) LIMIT 5";
    $stmt = $conn->prepare($sql);

    $stmt -> bindParam(":country", $employee->country);

    if($stmt->execute()){
        $rel_employees = $stmt->fetchAll(PDO::FETCH_OBJ);
    }
?>

<?php include './views/header.php' ?>
<div class="container">
    <div class="row">
    <li>
        <h1><?php echo $employee->full_name ?></h1>
        <a href="./main.php">Back to List</a>
    </li>
        <div class="col">
            <figure>
                <img src="<?php echo $employee->avatar?>">
            </figure>
            <h3>Background</h3>
            <ul>
                <li><b>Email :</b><?php echo $employee->email ?></li>
                <li><b>Company :</b><?php echo $employee->company ?></li>
                <li><b>Department :</b><?php echo $employee->department ?></li>
            </ul>
        </div>
        <div class="col">
            <div class="card">
                <h3>Bio</h3>
                <p><?php echo $employee->bio ?></p>
            </div>
            <br>
            <div>
                <h3>Related Employees - <?php echo $employee->country ?></h3>
                <ul class="employees">
                    <?php foreach($rel_employees as $rel_employee): ?>
                        <li>
                            <?php echo $rel_employee->full_name ?>
                            <a href="./profile.php?id=<?php echo $rel_employee->id ?>">View Profile</a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php include './views/footer.php' ?>