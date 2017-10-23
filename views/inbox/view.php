<div class="popup">
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
