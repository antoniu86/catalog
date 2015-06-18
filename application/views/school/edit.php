<form action="/school/save/<?php echo $selected_school->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Scoala</legend>

                <?php $this->render_view('edit_school'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>