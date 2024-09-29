<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
        <?php
            if(isset($_GET["error"])){
        ?>
        <p style="background-color: green; color: white; padding: 10px;"><?php $_GET["success"] ?>Registration Successful!</p>
        <?php
            }
        ?>

        <?php
            if(isset($_GET["error"])){
        ?>
        <p style="background-color: red; color: white; padding: 10px;"><?php $_GET["error"] ?> Password Mismatch</p>';
        <?php
            }
        ?>

    <form action="output.php" method="POST">

    <div>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" ><br><br>
    </div>

    <div>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>
    </div>

    <div>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" ><br><br>
    </div>

    <div>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" ><br><br>
    </div>


        <input type="submit" value="Register">

    </form>
</body>
</html>