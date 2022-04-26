<?php 

    include './lib/login.php';

    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = htmlspecialchars($_POST['username']);
        $password = md5(htmlspecialchars($_POST['password']));
    }
    if(loginCompare($user, $password) === 1){
        header('Location: ./home.php ');
    }else{
        header('Location: ./login.php?login=erro ');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header></header>
    <main>
        <form action="index.php" method="post">
            <p>Your username: <input type="text" name="username"/></p>
            <p>Your password: <input type="text" name="password"/></p>
        </form>
    </main>
    <footer></footer>
</body>
</html>