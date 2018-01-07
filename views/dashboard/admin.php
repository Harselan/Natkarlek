<div class="bg" id="bg"></div>
<div class="bg-btns"></div>

<div id="heart">
  <div id="leftH"></div>
  <div id="midH"></div>
  <div id="rightH"></div>
</div>

<div id="buttons">
  <a onclick="popUp();" href="#"><div class="one"><img src="assets/images/message.png" alt="Rapporterade meddelanden"></div></a>
  <a onclick="profilePopup();"><div class="two"><img src="assets/images/profile.png" alt="Profil"></div></a>
  <a onclick="aboutPopup();"><div class="three"><img src="assets/images/om.png" alt="Om oss"></div></a>
  <a href="/logout"><div id="four"><img src="assets/images/logout.png" alt="logout"></div></a>
</div>

<?php if( isset( $reports ) ): ?>
<div class="reports">
    <h2>Rapporter</h2>
    <table>
        <tr>
            <td>#</td>
            <td>#S</td>
            <td>#R</td>
            <td>Message</td>
            <td>Tidpunkt</td>
            <td>Anledning</td>
        </tr>
        <?php foreach( $reports as $report ): ?>
            <tr>
                <td><?=$report['id']?></td>
                <td><?=$report['sender']?></td>
                <td><?=$report['receiver']?></td>
                <td><?=$report['message']?></td>
                <td><?=date( 'Y-m-d m:i:s', $report['reported'] )?></td>
                <td><?=$report['reason']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php endif; ?>
<div class="users">
    <h2>Användare</h2>
    <table>
        <tr>
            <td>#</td>
            <td>Namn</td>
            <td>Status</td>
            <td></td>
        </tr>
        <?php foreach( $users as $user ): ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['name']?></td>
                <td><?=$user['state']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
