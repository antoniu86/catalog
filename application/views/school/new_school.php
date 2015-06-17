<form action="/school/create" method="POST">
    <div class="row">
        <div class="col-md-5">
            <fieldset>
                <legend>Scoala</legend>

                <?php $this->render_view('new_school'); ?>
            </fieldset>
        </div>

        <div class="col-md-5 col-md-offset-2">
            <fieldset>
                <legend>Administrator</legend>

                <?php $this->render_view('new_user'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>