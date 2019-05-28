<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login_action.php" method="post">
        Email<br/>
        <input type="email" required name="email"/><br/>
        Password<br/>
        <input type="password" required name="password"/><br/><br/>
        <button type="submit">Log in</button>
    </form>
    <?php
        $message = '';
        if(isset($_GET['err'])) {
            switch($_GET['err']){
                case 1:
                    $message = 'fields missing';
                    break;
                case 2:
                    $message = 'bad username or password';
                    break;
                case 3:
                    $message = 'you need to log in to view the admin pages';
                    break;
            }
        }
    ?>
    <span style="color: red;"><?=$message?></span>
</body>
</html>