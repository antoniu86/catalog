<div class="row">
    <div class="col-md-12">
        <?php if ($user->sys() || $user->admin()): ?>
            <a href="/teacher/edit/<?php echo $selected_user->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
        <?php endif; ?>
        <br><br>
    </div>
</div>