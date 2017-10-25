<div class="popup" id="popupContent">
    <span onclick="popdown()" class="popdown">X</span>
    <h2>Profil</h2>
    <form class="" action="/profile/edit" method="post">
        <h3>Namn</h3><input type="text" name="name" value="<?=$data['name']?>" placeholder="Namn:">
        <h3>Behörighet</h3><input type="text" name="state" value="<?=$data['state']?>" readonly>
        <h3>Lösenord</h3><input type="password" name="password" placeholder="Skriv för att ändra lösenord:">
        <input type="submit" name="" value="Spara">
    </form>
</div>
