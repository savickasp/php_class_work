<form <?php print html_attr(($form['attr'] ?? []) + (['method' => 'post'])); ?>>

    <?php foreach ($form['fields'] ?? [] as $field_id => $field):?>
        <label>
            <span class="label"><?php print $field['label']?></span>
            <input
                <?php print html_attr(($field['extra']['attr'] ?? []) + [
                    'name' => $field_id,
                    'type' => $field['type'] ?? 'text',
                    'value' => $field['value'] ?? '',
                    ])?>>
            <div class="error-style"><?php print ($field['error'] ?? ''); ?></div>
        </label>
    <?php endforeach;?>

    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button name="action" <?php print html_attr($button['extra']['attr'] ?? []);?>><?php print ($button['tile'] ?? 'submit');?></button>
    <?php endforeach;?>
</form>
