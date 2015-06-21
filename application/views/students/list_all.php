<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Elevi</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($students as $value): $value = convert_array_to_object('user', $value["User"]) ?>
                    <tr>
                        <td><?php echo $value->last_name; ?></td>
                        <td><?php echo $value->first_name; ?></td>
                        <td align="center">
                            <a href="/student/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            <?php if ($user->sys() || $user->admin()): ?>
                                &nbsp;&nbsp;
                                <a href="/student/edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                &nbsp;&nbsp;
                                <a href="/student/delete/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href="/student/new_student" class="btn btn-default">Adauga</a>
    </div>
</div>