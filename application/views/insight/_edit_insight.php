<label for="insight_title">Titlu</label><br>
<input type="text" name="insight[title]" id="insight_title" class="form-control" value="<?php echo $selected_insight->title; ?>" data-validate="required"><br>

<label for="insight_text">Continut</label><br>
<textarea name="insight[text]" id="insight_text" class="form-control"><?php echo $selected_insight->text; ?></textarea><br>