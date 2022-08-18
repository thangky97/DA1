<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop nước hoa chính hãng</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./content/style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="margin-top:140px;">
    <div class="wrapper" style="position:fixed; transform:translateZ(0); z-index:100; top:0; left: 0; right: 0; -webkit-transform:translateZ(0);">
        <div class="row" style="background: #000; margin: 0;">
            <?php require 'layout/header.php'; ?>
        </div>
        <nav class="row" style="margin: 0;">
            <?php require 'layout/menu.php'; ?>
        </nav>
    </div>
    <div class="container">
        <div class="row" style="margin: 0;">
            <?php require 'layout/slideshow.php'; ?>
        </div>
        <div class="row" style="margin: 0;">
            <aside class="col-sm-3">
                <?php require "layout/hang.php"; ?>
                <?php require "layout/top10.php"; ?>
            </aside>
            <article class="col-sm-9">
                <?php include $VIEW_NAME; ?>
            </article>
        </div>
    </div>
    <?php require "layout/tt-1.php"; ?>
    <footer class="wrapper">
                <?php require "layout/footer.php"; ?>
            </footer>
</body>

</html>