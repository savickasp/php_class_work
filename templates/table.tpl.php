<table>
    <thead>
    <tr>
        <?php foreach ($arrayTable['thead'] as $value): ?>
            <th><?php print $value; ?></th>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayTable['tbody'] as $row): ?>
        <tr>
            <?php foreach ($row as $col): ?>
                <td><?php print $col; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>