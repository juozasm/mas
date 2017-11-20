
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-4.0.0-alpha.6/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Begin page content -->

<div class="container">
    <div class="mt-3">

        <h1>Sticky footer with fixed navbar</h1>
    </div>

    <?php
    session_start();
    $username = array("antanas", "petras", "lol");
    $adminas = array("adminas", "admin");
    $password = md5("pass");
    print_r($username);

    if (isset($_POST['username'])) {
        if (in_array($_POST['username'], $username) && md5($_POST['password']) == $password) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['role'] = 'vartotojas';
            echo "</br>" . "yra toks vartotojas sviekiname prisijungus  varotojau - ", $_POST['username'];
        }

        if (in_array($_POST['username'], $adminas) && md5($_POST['password']) == $password) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['role'] = 'admin';
            echo "</br>" . "yra toks vartotojas sviekiname prisijungus  adminai - ", $_POST['username'];
        }
    }

    ?>
    <form action="index.php" method="post">
        User Name:<br>
        <input type="text" name="username"><br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>


    <?php
    if (isset($_SESSION['username'])) {
        echo "Jusu vardas ",$_SESSION['username'],"</br>";
        echo "Jusu role - ",$_SESSION['role'],"</br>";
        echo "<a href='functions.php'>Atsijungti</a>";
    }

    //if(isset($_POST['submit'])){
    //    echo "Login:",$_POST['username'];
    //    echo "Password:",$_POST['password'];
    //}
    ?>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>



