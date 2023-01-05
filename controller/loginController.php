<?php 
include_once("../Model/AdminModel.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $user = new AdminModel();
    $user = $user->AdminLog($email, $pass);
    if ($user) {
        $_SESSION["user"] = $user;
        header("location: /home");
    } 


}


?>