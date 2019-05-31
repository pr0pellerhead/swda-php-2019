<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include('views/header.php'); ?>
    <div>
        <?php
            $lang = 'en';
            $page = 'views/main.php';
            if(isset($_GET['lang'])){
                $lang = $_GET['lang'];
            }
            if(isset($_GET['page'])){
                $page = 'views/'.$_GET['page'].'.'.$lang.'.php'; // views/about.en.php
            }
            echo $page;
            if(file_exists($page)){
                include($page);
            } else {
                include('views/main.php');      
            }
        ?>
    </div>
    <?php include('views/footer.php'); ?>
</body>
</html>