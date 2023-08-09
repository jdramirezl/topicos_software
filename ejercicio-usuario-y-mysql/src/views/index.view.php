<!DOCTYPE html>
<?php
?>



<body>
    <div class="container">
        <h1><?= $title ?></h1>
    </div>
    <div class="container form">
        <div class="card">
            <div class="container">
                <?php
                require __DIR__ . '/form/form.view.php';
                ?>
            </div>
        </div>
    </div>
</body>
