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
