<label for="year_name">Denumire</label><br>
<input type="text" name="year[name]" id="year_name" class="form-control" value="<?php echo $selected_year->name; ?>" data-validate="required"><br>

<label for="datepicker_start">Incepe la</label><br>
<input type="text" name="year[start_at]" id="datepicker_start" class="form-control" value="<?php echo $selected_year->start_at; ?>" data-validate="required"><br>

<label for="datepicker_end">Sfarseste la</label><br>
<input type="text" name="year[end_at]" id="datepicker_end" class="form-control" value="<?php echo $selected_year->end_at; ?>" data-validate="required"><br>