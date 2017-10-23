<table>
<tr>
    <td>#</td>
    <td>Meddelande</td>
</tr>
<?php foreach( $inbox as $inbox ): ?>

<tr>
    <td><?=$inbox['id']?></td>
    <td><?=$inbox['text']?></td>
</tr>

<?php endforeach; ?>

</table>
