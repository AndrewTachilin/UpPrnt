<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//www.prosv.ru/favicon.ico" rel="shortcut icon">
    <title>Printers Prosv</title>
    <!-- Bootstrap core CSS -->
    <link href="./Jumbotron Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Jumbotron Template for Bootstrap_files/jumbotron.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--<link rel="stylesheet" href="css/style.css">-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="logo" href="http://prosv.ru"></a>
        </div>
        <div class="navbar-collapse collapse">
            <?php
            if (!$_SESSION['admin']) {
                ?>
                <form class="navbar-form navbar-right" role="form" method="post" action="admin">
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="UserName" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" id="Button1" name="submit" class="btn btn-success">Sign in</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    header('location:admin');
                }
            }else{?>
            <form class="navbar-form navbar-right" role="form" method="post" action="index">
                <button type="submit" name="logout" class="btn btn-success">Log out</button>
            </form>
            <form class="navbar-form navbar-right">
                <select class="form-control input-sm"" size="1" name="hero[]" >
                <option class="" name="delay[]" value="1">Refresh rate printers</option>
                <option class="" name="delay[]" value="5"> every 5 minute</option>
                <option class="" name="delay[]" value="20">every 20 minute</option>
                <option class="" name="delay[]" value="40">every 40 minute</option>
                <option class="form-control input-sm" name="delay[]" value="60"> every 60 minute</option>
                <input style="margin-left: 10px" type="submit" value="send" name="submit_time" class="btn btn-primary">
                </select>
            </form>
            <form class="navbar-form navbar-right">
                <input type="text" name="port_name" class="form-control input-sm" placeholder="Input port number ">
                <input type="submit" name="submit_port" value="send" class="btn btn-primary">
            </form>
            <form class="navbar-form navbar-right">
              <label style="color:white; margin-right: 5px"> <input type="checkbox" name="type" value="asd" style="color:white">Черные принтера</label>
              <label style="color:white; margin-right: 5px"> <input type="checkbox" name="type" value="asd" style="color:white">Цветные принтера</label>
                <input type="submit" name="submit_type" value="send" class="btn btn-primary">
            </form>
            <?php
            if (isset($_POST['logout'])) {
                $_SESSION['admin'] = false;
                header('location:index');
            } ?>
        </div><!--/.navbar-collapse -->
    </div>
</div>
<?php
include_once(ROOT . '/view_color.php');
}

?>


