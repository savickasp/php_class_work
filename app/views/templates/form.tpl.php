<form <?php print html_attr(($form['attr'] ?? []) + (['method' => 'post'])); ?>>
    <?php if ($form['show_form']): ?>
    <!-- start inputs -->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>

        <div class="input-container">

            <!-- start label -->
            <?php if (isset($field['label'])): ?>
            <label>
                <span class="label"><?php print $field['label'] ?></span>
                <?php endif; ?>

                <!-- include input element -->
                <?php if (in_array($field['type'], INPUT_TYPES)): ?>
                    <?php require ROOT . '/app/views/templates/form_elements/' . 'input.form.tpl.php'; ?>
                <?php else: ?>
                    <?php require ROOT . '/app/views/templates/form_elements/' . $field['type'] . '.form.tpl.php'; ?>
                <?php endif; ?>

                <?php if (isset($field['label'])): ?>
            </label>
        <?php endif; ?>
            <!-- end of label -->

            <!-- field message -->
            <?php if (isset($field['error'])): ?>
                <span class="error-style"><?php print ($field['error']); ?></span>
            <?php endif; ?>
            <!-- end of field message -->

        </div>

    <?php endforeach; ?>
    <!-- end of inputs -->

    <!-- buttons -->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button name="action" <?php print html_attr(($button['extra']['attr'] ?? []) + ['value' => $button_id]); ?>><?php print ($button['tile'] ?? 'submit'); ?></button>
    <?php endforeach; ?>
    <!-- end of buttons -->
    <?php endif; ?>
    <!-- messsage -->
    <?php if (isset($form['message'])): ?>
        <div class="form-message"><?php print $form['message']; ?></div>
    <?php endif; ?>
</form>
<?php if (isset($h1)):?>
<h1><?php print $h1; ?></h1>
<?php endif; ?>
