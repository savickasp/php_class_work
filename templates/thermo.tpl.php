<div class="thermo-container">
    <?php foreach ($thermo as $figure): ?>
        <div class="<?php print implode(' ', [$figure['form'], $figure['color']]); ?>">
            <?php if (isset($figure['text'])): ?>
            <span><?php print $figure['text']?></span>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>