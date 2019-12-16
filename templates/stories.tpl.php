<div>
    <ul>
    <?php foreach ($stories as $storie): ?>
        <li class="text-<?php print $storie['color']; ?>"><?php print $storie['text']; ?></li>
    <?php endforeach; ?>
    </ul>
</div>