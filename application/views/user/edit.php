<?php $this->render_view('breadcrumb_edit'); ?>

<form action="/user/save/<?php echo $selected_user->id; ?>" method="POST">

    <div class="row">
        <div class="col-lg-12">

            <fieldset>
                <legend>Informatii</legend>
                
                <?php $this->render_view('user/_edit_user'); ?>
            </fieldset>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php $this->render_view('edit_buttons'); ?>
        </div>
    </div>
</form>