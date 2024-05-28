<?php
require 'connect.php';

if (isset($_POST['username'], $_POST['password'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $db->prepare("select id,username,password,name from users where username = :username");
    $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if ($password === $result['password']) {
            session_start();
            $_SESSION['username'] = $result['username'];
            echo "<br>";
            echo "Login Successful!";
            header("Location: index.php");
        } else {
            echo "<br>";
            echo "Invalid Password...";
        }

    }else{
        echo "<br>";
        echo "Invalid Username...";
    }
    
}
?>