<form action="/user/create_teacher" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Profesor</legend>
                
                <?php $this->render_view('user/_new_user'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>