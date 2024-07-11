<!DOCTYPE html>
<html lang="en">
<?php
session_start(); // بداية الجلسة
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المستند</title>
</head>

<body>
    <form action="" method="post" style="margin: 10% 50%;">
        <button type="submit" name="countBtn">Count</button>
    </form>

    <?php
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }

    if (isset($_POST['countBtn'])) {
        $_SESSION['count']++;
    }


   
    ?>
    <h1 style="margin: 10% 45%;"><?php  echo "<p>Count: {$_SESSION['count']}</p>"; ?></h1>



</body>

</html>