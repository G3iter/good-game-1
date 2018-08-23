<?php 
    // begin the session
    session_start();

    include_once 'WebService.php';

    $service = new WebService();

    if (isset($_POST['add-cart-fc'])) {
        $service->add_game_to_cart();
    }
    if (isset($_POST['clear-cart'])) {
        $service->remove_games_from_cart();
    }
    if (isset($_POST['login-email'])) {
        $service->login_user($_POST['login-email'], $_POST['login-password']);
    }
    if (isset($_POST['log-out'])) {
        $service->logout_user();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/scss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/scss/main.css">

    <title>Good Game</title>
</head>

<body>
    <!--TODO: Cia deti visa content (i #app vidu)-->

    <!-- Header -->
    <div class="app">
        <div class="header">
            <a href="./" class="logo">GOOD GAME</a>
            <div class="header-right">
                <?php if (isset($_SESSION['active-user'])) {
                    $parts = explode("@", $_SESSION['active-user']);
                    $username = $parts[0];
                    ?>
                    <h3 style="display: inline-block;">Greetings, <?php echo $username; ?></h3>
                    <form action="#" method="POST" style="display: inline-block;"">
                        <input class="button" type="submit" name="log-out" value="Log Out">
                    </form>
                <?php } else { ?>
                    <button class="button" data-toggle="modal" data-target="#login_modal">Log in/ Sing up</button>
                <?php } ?>
                <button class="button" data-toggle="modal" data-target="#cart_modal">
                    <ion-icon name="cart"></ion-icon>
                </button>
            </div>
        </div>
    </div>

    <div class="header-cat">
        <div class="headerbottom">
            <a href="#" class="logo"> Categories</a>
            <a href="#" class="logo"> Platform</a>
        </div>
    </div>