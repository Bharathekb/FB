<?php
require 'core.php';
require 'dbconnect.php';

$logout_text = '<a href= "logout.php">Logout</a>';

if (loggedin()) {
    $firstname = getuserfield('firstname');
    $lastname = getuserfield('lastname');
    $welcome = '<br>Welcome, ' . $firstname . ' ' . $lastname;
    $logout = $logout_text;
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
    <style>
    body {
        background-color: #000;
    }

    #welcome {
        position: absolute;
        top: 5%;
        left: 5%;
        right: 5%;
        color: #000;
        background-color: #fff;
        padding: 10px 20px;
    }

    #welcome h5 {
        text-align: center;
        padding: 10px 0;
    }
    </style>

</head>

<body>
    <section id="next">
        <div class="container">
            <div id="welcome">
                <h5><?php if (isset($welcome)) echo $welcome; ?></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis deserunt ipsa distinctio ipsam modi
                    dolore eius. Molestias minima est voluptatem natus vero sequi fugiat praesentium laboriosam nihil
                    iure! Non, natus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis harum eligendi
                    asperiores possimus molestiae consectetur dolore, quod iste, excepturi optio natus voluptate id et
                    ut quam rerum laboriosam blanditiis officiis? Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Repellat animi voluptatem sequi adipisci, fugit beatae est voluptate. Iste, obcaecati dolor?
                    Adipisci quibusdam laboriosam deleniti reiciendis cum aspernatur accusantium ratione laborum?</p>
                <h5><?php if (isset($logout)) echo $logout; ?></h5>
            </div>

        </div>
    </section>

    <!-- Bootstrap js -->
    <script src="js/bootstrap_js/bootstrap.js"></script>


    <!-- Custom js -->
    <script src="js/myscript.js"></script>
</body>

</html>
<?php
} else {
    include 'loginform.php';
}
?>