<?php
require_once 'fileHead.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e8daec485b.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title><?= $CONF_TITLE ?></title>
</head>
<body>
<?php
require_once 'pages/'.$_GET['p'] . '.php';
?>
</body>
</html>
