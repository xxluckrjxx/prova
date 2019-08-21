<?php
session_start();
if(isset($_SESSION['userID'])){
$email = $_SESSION['userEmail'];
$id = $_SESSION['userID'];
}else{
header("location: login.php?err=102");
exit;
}
?>
<html>
        <head>
            <meta charset="utf-8">
            <title>Página</title>
        </head>
<body>
    <h1>Página não encontrada!</h1>

   
</body>
</html>