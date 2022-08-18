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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body >
    <div class="wrapper" >
        <div class="row" style="background: #000;margin: 0;">
            <?php require 'layout/header.php'; ?>
        </div>
        <nav class="row" style="margin: 0;">
            <?php require 'layout/menu.php'; ?>
        </nav>
    </div>
    <div class="container">
        <div class="row" style="margin: 0;"> 
            <aside class="col-sm-3">
                <?php require "tai-khoan/quan-ly-tk.php"; ?>
            </aside>
            <article class="col-sm-9 ">
                <?php include $VIEW_NAME; ?>
            </article> 
        </div>
    </div>
    
    <footer class="wrapper">
                <?php require "layout/footer.php"; ?>
        </footer>
</body>
</html>