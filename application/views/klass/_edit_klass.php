<label for="klass_name">Denumire</label><br>
<input type="text" name="klass[name]" id="klass_name" class="form-control" value="<?php echo $selected_klass->name; ?>" data-validate="required"><br>

<?php $teachers = new User(); ?>
<?php $teachers = $teachers->get_all_teachers($school->id); ?>

<label for="klass_user_id">Diriginte</label><br>
<select name="klass[user_id]" id="klass_user_id" class="form-control" data-validate="required">
    <?php foreach ($teachers as $key => $value): $value = convert_array_to_object('user', $value["User"]) ?>
        <option value="<?php echo $value->id; ?>"<?php if ($value->id == $selected_klass->user_id) { echo ' selected'; } ?>><?php echo $value->full_name(); ?></option>
    <?php endforeach; ?>
</select><br>