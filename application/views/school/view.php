<?php if ($user->sys() || $user->admin()): ?>
    <div class="row">
        <div class="col-md-12">
            <a href="/school/edit/<?php echo $selected_school->id; ?>" class="btn btn-primary btn-sm">
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
                    <th colspan="2">Scoala</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denumire</td>
                    <td><?php echo $selected_school->name; ?></td>
                </tr>

                <tr>
                    <td>Contact</td>
                    <td><?php echo $selected_school->contact; ?></td>
                </tr>

                <tr>
                    <td>Informatii</td>
                    <td><?php echo $selected_school->info; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
