<label for="school_name">Denumire institutie</label><br>
<input type="text" name="school[name]" id="school_name" class="form-control" value="<?php echo $selected_school->name; ?>" data-validate="required"><br>

<label for="school_contact">Contact</label><br>
<textarea name="school[contact]" id="school_contact" class="form-control" data-validate="required"><?php echo $selected_school->contact; ?></textarea><br>

<label for="school_info">Informatii</label><br>
<textarea name="school[info]" id="school_info" class="form-control"><?php echo $selected_school->info; ?></textarea><br>