<label for="period_name">Denumire</label><br>
<input type="text" name="period[name]" id="period_name" class="form-control" value="<?php echo $selected_period->name; ?>" data-validate="required"><br>

<label for="datepicker_start">Incepe la</label><br>
<input type="text" name="period[start_at]" id="datepicker_start" class="form-control" value="<?php echo $selected_period->start_at; ?>" data-validate="required"><br>

<label for="datepicker_end">Sfarseste la</label><br>
<input type="text" name="period[end_at]" id="datepicker_end" class="form-control" value="<?php echo $selected_period->end_at; ?>" data-validate="required"><br>