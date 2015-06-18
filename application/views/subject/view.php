<?php if ($user->sys() || $user->admin()): ?>
    <div class="row">
        <div class="col-md-12">
            <a href="/subject/edit/<?php echo $selected_subject->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
            <br><br>
        </div>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Materie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denumire</td>
                    <td><?php echo $selected_subject->name; ?></td>
                </tr>

                <tr>
                    <td>Descriere</td>
                    <td><?php echo $selected_subject->description; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
