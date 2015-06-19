<div class="row">
    <div class="col-md-12">
        <?php if ($user->sys() || $user->admin()): ?>
            <a href="/period/edit/<?php echo $selected_period->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
        <?php endif; ?>
        <br><br>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Perioada an scolar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denumire</td>
                    <td><?php echo $selected_period->name; ?></td>
                </tr>

                <tr>
                    <td>Incepe la</td>
                    <td><?php echo $selected_period->start_at; ?></td>
                </tr>

                <tr>
                    <td>Sfarseste la</td>
                    <td><?php echo $selected_period->end_at; ?></td>
                </tr>

                <tr>
                    <td>Anul scolar</td>
                    <td>
                        <a herf="/year/view/<?php echo $year->id; ?>">
                            <?php echo $year->name; ?>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
