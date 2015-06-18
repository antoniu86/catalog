<label for="subject_name">Denumire</label><br>
<input type="text" name="subject[name]" id="subject_name" class="form-control" value="<?php echo $selected_subject->name; ?>"><br>

<label for="subject_description">Descriere</label><br>
<textarea name="subject[description]" id="subject_description" class="form-control"><?php echo $selected_subject->description; ?></textarea><br>