<form <?php print html_attr(($form['attr'] ?? []) + (['method' => 'post'])); ?>>

    <!-- start inputs -->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>

        <div class="input-container">

            <!-- start label -->
            <?php if (isset($field['label'])): ?>

            <label>
                <span class="label"><?php print $field['label'] ?></span>

                <?php endif; ?>

                <!-- if create select -->
                <?php if (isset($field['type']) && $field['type'] == 'select'): ?>

                    <select
                        <?php print html_attr(($field['extra']['attr'] ?? []) + [
                                'name' => $field_id,
                                'type' => $field['type'],
                                'value' => $field['value'] ?? '',
                            ]) ?>>
                        <?php foreach ($field['option'] as $value => $title): ?>
                            <option value="<?php print $value ?>"><?php print $title ?></option>
                        <?php endforeach; ?>
                    </select>

                    <!-- if create input -->
                <?php else: ?>

                    <input
                        <?php print html_attr(($field['extra']['attr'] ?? []) + [
                                'name' => $field_id,
                                'type' => $field['type'] ?? 'text',
                                'value' => $field['value'] ?? '',
                            ]) ?>>

                <?php endif; ?>
                <!-- end of if select/input -->

                <!-- field message -->
                <div class="error-style"><?php print ($field['error'] ?? ''); ?></div>
                <!-- end of field message -->

                <?php if (isset($field['label'])): ?>
            </label>
            <!-- end of label -->

        <?php endif; ?>

        </div>

    <?php endforeach; ?>

    <!-- end of inputs -->

    <!-- buttons -->

    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button name="action" <?php print html_attr(($button['extra']['attr'] ?? []) + ['value' => $button_id]); ?>><?php print ($button['tile'] ?? 'submit'); ?></button>
    <?php endforeach; ?>
    <!-- end of buttons -->

    <!-- messsage -->
    <?php if (isset($form['message'])): ?>
        <div class="form-message"><?php print $form['message']; ?></div>
    <?php endif; ?>
</form>
