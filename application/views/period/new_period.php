<form action="/period/create/<?php echo $year_id; ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Perioada an scolar</legend>
                
                <?php $this->render_view('new_period'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>