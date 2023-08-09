<?php
$path = __DIR__ . '/../../controllers/form.controller.php';
include($path);
?>

<form method="post">
    <div>

        <label for="user">User:</label>
        <input type="text" id="user" name="user" />
    </div>
    <input type="submit" value="Submit" id="submit" name="submit" />
    <input type="submit" value="Get all records" id="submit" name="submit_records" />
</form>

<?php if (isset($_POST['submit'])) : ?>
    <div class="container">
        <?php if (isset($_POST['user'])) : ?>
            Creating user: <?php echo $_POST['user'] ?> <br>
            <?php
            insertUsername($_POST['user']);
            ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if (isset($_POST['submit_records'])) : ?>
    <div class="container">
        <?php
        getUsernames();
        ?>
    </div>
<?php endif; ?>
