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
  <a onclick="profilePopUp();"><div class="two"><img src="assets/images/profile.png" alt="Profil"></div></a>
  <a href="/omoss"><div class="three"><img src="assets/images/om.png" alt="Om oss"></div></a>
  <a href="/logout"><div id="four"><img src="assets/images/logout.png" alt="logout"></div></a>
</div>

<div id="popupWin">
  <a onclick="popDown()"><img src="assets/images/cross.png" alt="Stäng" class="popdown"></a>
  <h2>Inkorg</h2>
  <table>
  <?php foreach( $inbox as $inbox ): ?>

  <tr>
      <td><?=$inbox['text']?></td>
      <td><a href="inbox/<?= $inbox['id'] ?>/delete">X</a></td>
  </tr>

  <?php endforeach; ?>

  </table>
</div>

<div class="popup" id="profilePopUp">
    <img src="assets/images/cross.png" alt="Stäng" class="popdown" onclick="profilePopDown()">
    <h2>Profil</h2>
    <form action="/profile/edit" method="post">
        <h3>Namn</h3><input type="text" name="name" value="<?=$profile['name']?>" placeholder="Namn:">
        <h3>Behörighet</h3><input type="text" name="state" value="<?=$profile['state']?>" readonly>
        <h3>Lösenord</h3><input type="password" name="password" placeholder="Skriv för att ändra lösenord:">
        <input type="submit" name="" value="Spara">
    </form>
</div>

<h1>Skriv ett fint meddelande</h1>
<p>#NÄTKÄRLEK</p>

<form class="kommentar" action="/message/add" method="post">
  <textarea name="text" rows="15" cols="60"></textarea><br>
  <input type="submit" name="" value="Sprid Kärleken">
</form>
