<!DOCTYPE html>
<html lang="en|fr" ng-app="listpp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projet Personnel - 2017</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <?= (!isset($_GET['controller'])) ? '<link rel="stylesheet" href="./assets/css/panel-login.css">' : ''; ?>


    <?= (isset($_GET['controller'])) ? '<style>
        body {
            background-color: #fff;
        }
    </style>
    <script src="./assets/js/angular.min.js"></script>
    <script src="./assets/js/productCtrl.js"></script>
    ' : '' ?>

</head
<body>

    <main class="container-fluid">
        <header>
            <?= (isset($_GET['controller']) && isset($_SESSION['user_nom'])) ? '<h1>Welcome ' . $_SESSION['user_nom']
            .'</h1>' :
                ''; ?>
        </header>
