<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="user-details">
        <p>Logged in user</p>
        <?php
        echo '<p>Email: ' . $user['email'] . '</p><br>';

        echo '<p> Name: ' . $user['name'] . '</p>';

        ?>
        <a href="logout.php">Logout</a>

    </div>


</body>

</html>