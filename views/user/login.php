<?php if( $error == 1 && isset( $message ) ): ?>
    <div class="warning">
        <h2><?= $message ?></h2>
    </div>
<?php endif; ?>
<div class="login-wrapper">
    <form action="/" method="post">
        <input type="text" name="name" placeholder="Namn:">
        <input type="password" name="password" placeholder="Lösenord:">
        <input type="submit" value="Logga in">
    </form>
</div>
