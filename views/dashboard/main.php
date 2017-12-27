<div class="bg" id="bg"></div>
<div class="bg-2"></div>
<div class="bg-btns"></div>
<div class="bg-3"></div>

<div id="heart">
  <div id="leftH"></div>
  <div id="midH"></div>
  <div id="rightH"></div>
</div>

<div class="head">
  <p>#NÄTKÄRLEK</p>
</div>

<div id="buttons">
  <a onclick="popUp();" href="#"><div class="one"><img src="assets/images/message.png" alt="Inkorg"></div></a>
  <a onclick="profilePopup();"><div class="two"><img src="assets/images/profile.png" alt="Profil"></div></a>
  <a href="/omoss"><div class="three"><img src="assets/images/om.png" alt="Om oss"></div></a>
  <?php if( isset( $_SESSION['user_id'] ) ): ?>
  <a href="/logout"><div id="four"><img src="assets/images/logout.png" alt="logout"></div></a>
  <?php else: ?>
  <div id="four"><a onclick="loginPopup();"><img src="assets/images/login.png" alt="logga in" style="margin-left:-10px;"></a></div>
  <?php endif; ?>
</div>

<?php if( isset( $_SESSION['user_id'] ) ): ?>
<div id="messagePopup">
  <img src="assets/images/cross.png" alt="Stäng" class="popdown" onclick="popDown()">
  <h2>Inkorg</h2>
  <table>
  <?php foreach( $inbox as $inbox ): ?>

  <tr>
      <td class="message"><?=$inbox['text']?></td>
      <?php if( !$inbox['reported'] ): ?>
      <td><a href="message/<?=$inbox['id']?>/report/">Rapportera</a></td>
      <?php endif; ?>
      <td><a href="inbox/<?= $inbox['id'] ?>/delete">X</a></td>
  </tr>

  <?php endforeach; ?>

  </table>

</div>
<?php else: ?>
<div id="messagePopup">
    <h2>Du måste logga in för att se meddelanden</h2>
</div>
<?php endif; ?>
<?php if( isset( $_SESSION['user_id'] ) ): ?>
<div id="profilePopup">
    <img src="assets/images/cross.png" alt="Stäng" class="popdown" onclick="profilePopdown()">
    <h2>Profil</h2>
    <form action="/profile/edit" method="post">
        <h3>Namn</h3><input type="text" name="name" value="<?=$profile['name']?>" placeholder="Namn:">
        <h3>Behörighet</h3><input type="text" name="state" value="<?=$profile['state']?>" readonly>
        <h3>Lösenord</h3><input type="password" name="password" placeholder="Skriv för att ändra lösenord:">
        <input type="submit" name="" value="Spara">
    </form>
</div>
<?php else: ?>
<div id="profilePopup">
    <h2>Du måste logga in för att se din profil</h2>
</div>
<?php endif; ?>
<div id="loginPopup">
    <img src="assets/images/cross.png" alt="Stäng" class="popdown" onclick="loginPopdown()">
    <div id="login" class="login-wrapper">
        <h2 id="header">Logga in</h2>
        <form id="login-form" action="/" method="post" class="loginPopup">
            <input id="input1" class="loginPopup inputs" type="text" name="name" placeholder="Namn:">
            <input id="input2" class="loginPopup inputs" type="password" name="password" placeholder="Lösenord:">
            <input id="input3" class="loginPopup inputs" type="submit" value="Logga in">
        </form>
    </div>
</div>

<h1>Skriv ett fint meddelande</h1>
<p>#NÄTKÄRLEK</p>

<form class="kommentar" action="/message/add" method="post">
  <textarea name="text" rows="15" cols="60"></textarea><br>
  <input type="submit" name="" value="Sprid Kärleken">
</form>
