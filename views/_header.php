<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/form.css">
        <title>Nätkärlek</title>
    </head>
    <body>
        <?php if( isset( $_SESSION['user_name'] ) ): ?>
        <div class="wrapper">
            <div class="hero">
                <h1>Solna Gymnasium</h1>
                <h2>#Nätkärlek</h2>
                <a href="/logout">Logga ut</a>
            </div>
        <?php endif; ?>
