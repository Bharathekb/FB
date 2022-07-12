<?php
require 'core.php';
require 'dbconnect.php';

if (loggedin()) {
    echo 'You are already registered and logged in.';
} else if (!loggedin()) {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['pass_again']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $pass_again = $_POST['pass_again'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $pass_hash = md5($password);

        if (!empty($username) && !empty($password) && !empty($pass_again) && !empty($firstname) && !empty($lastname)) {
            if ($password != $pass_again) {
                $passerr = "<h4 style='color:yellow;'>Passwords Do Not Match</h4>";
            } else {

                $query = "SELECT `username` FROM `users` WHERE `username`='$username' ";
                if ($query_run = mysqli_query($mycon, $query)) {
                    $num_rows = mysqli_num_rows($query_run);
                    if ($num_rows == 1) {
                        $exist = "<h4 style='color:yellow;'>User Name Already Exist!</h4>";
                    } else if ($num_rows == 0) {
                        $query = "INSERT INTO `users`(`id`,`username`,`password`,`firstname`,`lastname`) VALUES(NULL, '$username', '$pass_hash', '$firstname','$lastname')";
                        if ($query_run = mysqli_query($mycon, $query)) {
                            header('Location:success.php');
                        }
                    }
                }
            }
        } else {
            echo '<center style="color:yellow; font-weight:500;">All Fields Are Required</center>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Important Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Website Title-->
    <title>Registraion</title>

    <!-- Favicon -->
    <link rel="Shortcut icon" href="images/favicon/favicon-16x16.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.css" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Jquery -->
    <script src="js/jquery.js"></script>

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="css/fontawesome/all.css" />
    <script src="js/fontawesome/all.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/mystyle.css" />
</head>

<body>
    <!-- home -->
    <section id="home">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5><?php if (isset($exist)) echo $exist; ?></h5>
                        <form action="register.php" method="POST" id="myform">
                            <h5>Username</h5><input type="text" name="username" id="user" value="<?php if (isset($username)) {
                                                                                                            echo $username;
                                                                                                        } ?>"><br><br>

                            <h5>Password</h5><input type="password" name="password" id="password"><br><br>

                            <h5> Password Again</h5><input type="password" name="pass_again" id="pass_again"><br><br>
                            <h5><?php if (isset($passerr)) echo $passerr; ?></h5>
                            <h5> First Name</h5><input type="text" name="firstname" id="pass_again"
                                value="<?php if (isset($firstname)) {
                                                                                                                    echo $firstname;
                                                                                                                } ?>"><br><br>
                            <h5> Last Name</h5><input type="text" name="lastname" id="pass_again"
                                value="<?php if (isset($lastname)) {
                                                                                                                    echo $lastname;
                                                                                                                } ?>"><br><br>

                            <input type="submit" class="btn-general" id="sign" value="Sign Up">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home Ends -->


    <!-- Bootstrap js -->
    <script src="js/bootstrap_js/bootstrap.js"></script>


    <!-- Custom js -->
    <script src="js/myscript.js"></script>
</body>

</html>
<?php
}
?>