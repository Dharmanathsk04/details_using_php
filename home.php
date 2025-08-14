<?php


session_start();


if($_SESSION['login_status']==false) {

    echo "unautherised credentials";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   

</head>
<body>
    <h1>Home Html Works </h1>
</body>
</html>