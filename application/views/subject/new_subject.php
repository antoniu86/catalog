<form action="/subject/create" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Materie</legend>
                
                <?php $this->render_view('new_subject'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>