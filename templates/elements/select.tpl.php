<select
    <?php print html_attr(($field['extra']['attr'] ?? []) + [
            'name' => $field_id,
        ]) ?>>
    <?php foreach ($field['option'] as $value => $title): ?>
        <option value="<?php print $value; ?>"><?php print $title; ?></option>
    <?php endforeach; ?>
</select>