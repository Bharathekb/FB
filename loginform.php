<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass_hash = md5($password);
    if (!empty($username) && !empty($password)) {
        $query = "SELECT `id` FROM `users` WHERE `username`= '$username' AND `password`='$pass_hash'";
        if ($query_run = mysqli_query($mycon, $query)) {
            $num_rows =  mysqli_num_rows($query_run);
            if ($num_rows == 0) {
                $invalid = "<h6 style='color:red;'>Invalid Username or Password</h6>";
            } else if ($num_rows == 1) {
                $row = mysqli_fetch_row($query_run);
                $id = $row[0];
                $_SESSION['user_id'] = $id;
                header('Location: index.php');
            }
        }
    } else {
        $enter = "<h6 style='color:red;'>Please enter Email or Username and password</h6>";
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
    <title>Facebook</title>

    <!-- Favicon -->
    <link rel="Shortcut icon" href="images/favicon/fb.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.css" />

    <!-- Jquery -->
    <script src="js/jquery.js"></script>

    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="css/fontawesome/all.css" />
    <script src="js/fontawesome/all.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
    <script>
    /* window.addEventListener('load', function() {
            const myTimeout = setTimeout(function() {
                alert("Hi This Is Not Orginal Facebook This Is Developed By Bharath Just Create An Account To Login");
            }, 1000);

        })

        function myStopFunction() {
            clearTimeout(myTimeout);
        }*/
    </script>
</head>

<body>
    <div class="container">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>Hi Welcome!</strong> This Is Not Orginal Facebook This Is Developed By <b>Bharath</b> Just Create A
            New Account To Login
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 fb">
                <h1>facebook</h1>
                <p> Facebook helps you connect and share with the people in your life.</p>

            </div>
            <div class="col-lg-6 col-md-6">
                <div class="shadow container rounded cont1">
                    <form method="post" action="<?php echo $current_file ?>">
                        <h6><?php if (isset($invalid)) echo $invalid; ?></h6>
                        <div class="form-group p-2">
                            <h6><?php if (isset($enter)) echo $enter; ?></h6>
                            <input type="text" placeholder="Email address or phone number" class="form-control"
                                name="username" autofocus>
                        </div>
                        <div class="form-group p-2">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                        </div>
                        <div class="d-grid p-2">
                            <button id="login" type="submit" onclick="myStopFunction()" name="submit"
                                class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <div class="btn1">
                            <a href="<?php echo 'This is in developing proccess' ?>" type="button">Forgotten
                                password?</a>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="btn2">
                            <a href="register.php" class="btn btn-lg create">Create new account</a>
                        </div>
                    </form>
                </div>
                <div class="btn3">
                    <a href="" class="btn">Create a Page </a>
                    <p> for a celebrity, brand or business.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cont2">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-sm-12 col-lg-10 col-md-10 btn4">
                <small>English(UK)</small><a href="#" class="btn btn-sm">हिन्दी</a><a href="#"
                    class="btn btn-sm">اردو</a><a href="#" class="btn btn-sm">தமிழ்</a><a href="#"
                    class="btn btn-sm">বাংলা</a><a href="#" class="btn btn-sm">मराठी</a><a href="#"
                    class="btn btn-sm">తెలుగు</a><a href="#" class="btn btn-sm">ગુજરાતી</a><a href="#"
                    class="btn btn-sm">ಕನ್ನಡ</a><a href="#" class="btn btn-sm">മലയാളം</a><a href="#"
                    class="btn btn-sm">Español</a><a href="" class="fa"><b>+</b></a>

                <hr id="horizontal">
            </div>
            <div class="container cont3">
                <div class="row">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-sm-12 col-lg-10 col-md-10 col2">
                        <a href="" class="btn btn-sm">Sign Up</a>
                        <a href="" class="btn btn-sm">Log in</a>
                        <a href="" class="btn btn-sm">Messenger</a>
                        <a href="" class="btn btn-sm">Facebook Lite</a>
                        <a href="" class="btn btn-sm">Watch</a>
                        <a href="" class="btn btn-sm">Places</a>
                        <a href="" class="btn btn-sm">Games</a>
                        <a href="" class="btn btn-sm">Marketplace</a>
                        <a href="" class="btn btn-sm">Facebook Pay</a>
                        <a href="" class="btn btn-sm">Oculus</a>
                        <a href="" class="btn btn-sm">Portal</a>
                        <a href="" class="btn btn-sm">Instagram</a>
                        <a href="" class="btn btn-sm">Bulletin</a>
                        <a href="" class="btn btn-sm">Local</a>
                        <a href="" class="btn btn-sm">Fundraisers</a>
                        <a href="" class="btn btn-sm">Services</a>
                        <a href="" class="btn btn-sm">Voting Information Centre</a>
                        <a href="" class="btn btn-sm">Groups</a>
                        <a href="" class="btn btn-sm">About</a>
                        <a href="" class="btn btn-sm">Create ad</a>
                        <a href="" class="btn btn-sm">Create Page</a>
                        <a href="" class="btn btn-sm">Developers</a>
                        <a href="" class="btn btn-sm">Careers</a>
                        <a href="" class="btn btn-sm">Privacy</a>
                        <a href="" class="btn btn-sm">Cookies</a>
                        <a href="" class="btn btn-sm">AdChoices</a>
                        <a href="" class="btn btn-sm">Terms</a>
                        <a href="" class="btn btn-sm">Help</a>
                    </div>
                </div>
                <div class="footer">
                    <div class="continer"></div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-sm-12 col-md-10 col-lg-10">
                            <p class="para"><small>meta©2022</small></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Bootstrap js -->
    <script src="js/bootstrap_js/bootstrap.js"></script>


    <!-- Custom js -->
    <script src="js/myscript.js"></script>
</body>

</html>