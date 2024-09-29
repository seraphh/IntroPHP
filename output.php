<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']); 

    if ($username == "") {
        echo "Username is empty<br>";
    } else {
        echo "The USERNAME of user is " . htmlspecialchars($username) . "<br>"; 
    } 

    if ($email == "") {
        echo "Email is empty<br>";
    } else {
        echo "Email: " . htmlspecialchars($email) . "<br>";
    }

    if ($password == "") {
        echo "Password is empty<br>";
    }

    if ($confirm_password == "") {
        echo "Confirm Password is empty<br>";
    }

    if ($password != "" && $confirm_password != "") {
        if ($password === $confirm_password) {
            header("Location: demo.php?success=Registration successful");
            exit; // Don't forget to exit after a header redirect
        } else {
            header("Location: demo.php?error=Password Mismatch");
            exit; // Don't forget to exit after a header redirect
        }
    }
    
} else {
    echo "Invalid method type<br>";
}

?>
