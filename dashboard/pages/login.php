<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location: index.php');
} else { ?>

<!DOCTYPE html>
    <html lang = "en">

    <head>

    <meta charset = "utf-8">
    <meta http - equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <meta name = "description" content = "">
    <meta name = "author" content = "">

    <title> Masuk Ke Dashboard </title>

    <!--Bootstrap Core CSS -->
    <link href = "../vendor/bootstrap/css/bootstrap.min.css" rel = "stylesheet">

    <!--MetisMenu CSS -->
    <link href = "../vendor/metisMenu/metisMenu.min.css" rel = "stylesheet">

    <link rel = "stylesheet" href = "../../vendor/animate/animate.min.css">

    <link rel = "stylesheet" href = "../css/dashboard.css">

    <!--Custom CSS -->
    <link href = "../dist/css/sb-admin-2.css" rel = "stylesheet">

    <!--Custom Fonts -->
    <link href = "../vendor/font-awesome/css/font-awesome.min.css" rel = "stylesheet" type = "text/css">

    <!--HTML5 Shim and Respond . js IE8 support of HTML5 elements and media queries -->
    <!--WARNING : Respond . js doesn 't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="bg-indah">

    <div class="container animated flipInY" style="height: 100vh; width: 100%">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">            
                <div class="login-panel panel panel-default">

                <!-- Eror username and password is wrong -->
                    <?php if (isset($_GET['status'])) { ?>
                        <h5 class=" alert alert-danger text-center">Username atau password salah</h5>
                    <?php 
                } ?>
                <!-- End Eror username and password is wrong -->
                
                    <h3 class="text-center mt-5">Halaman Login Admin</h3>
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">Masuk Ke Halaman Dashboard</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../config/login.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text"
                                        autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                        value="" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-danger btn-block" name="loginadmin" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php 
} ?>