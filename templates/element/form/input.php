<?php
$type  = isset($type) ? $type : 'text';
$value = isset($value) ? $value : '';
?>

<div class="form-group">
    <label for="<?= $name ?>"><?= $placeholder ?></label>
    <input value="<?= $value ?>" name="<?= $name ?>" type="<?= $type ?>" class="form-control" id="<?= $name ?>"
        placeholder="<?= $placeholder ?>">
</div>