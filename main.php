<?php 
    include './views/header.php'; 
    include './models/employees.php';    
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Directory</h3>
            <ul class="employees">
                <?php foreach($employees as $employee): ?>
                    <li>
                        <?php echo $employee->full_name ?>
                        <a href="./profile.php?id=<?php echo $employee->id ?>">View Profile</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<?php include './views/footer.php'; ?>

