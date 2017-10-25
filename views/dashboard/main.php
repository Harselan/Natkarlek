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

<div id="nav">
  <ul>
    <li><a href="#">Random</a></li>
    <li><a href="#">Random</a></li>
    <li><a href="#">Random</a></li>
    <li><a href="#">Random</a></li>
  </ul>
</div>

<div class="buttons">
  <a href="#"><div class="one" onclick="popup()"><img src="assets/images/message.png" alt="Inkorg"></div></a>
  <a href="#"><div class="two"><img src="assets/images/profile.png" alt="Profil"></div></a>
  <a href="/omoss"><div class="three"><img src="assets/images/om.png" alt="Om oss"></div></a>
  <a href="/logout"><div class="four"><img src="assets/images/logout.png" alt="logout"></div></a>
</div>

<div class="popup" id="popupContent">
    <span onclick="popdown()" class="popdown">X</span>
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

<h1>Skriv ett fint meddelande</h1>
<p>#NÄTKÄRLEK</p>

<form class="kommentar" action="/message/add" method="post">
  <textarea name="text" rows="15" cols="60"></textarea><br>
  <input type="submit" name="" value="Sprid Kärleken">
</form>
