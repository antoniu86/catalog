<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<?php $klass = new Klass(); ?>
<?php $klass = $klass->find($klass_id); ?>

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/years/list_all">Ani scolari</a></li>
    <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
    <li><a href="/klasses/list_all/<?php echo $year_id; ?>">Clase</a></li>
    <li><a href="/klass/view/<?php echo $klass_id; ?>"><?php echo $klass[0]['Klass']['name']; ?></a></li>
    <li class="active">Profesori</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th style="text-align: center" width="80">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($klass_teachers as $value): $element = convert_array_to_object('KlassTeacher', $value["KlassTeacher"]) ?>
                <?php $klass_user = convert_array_to_object('user', $value["User"]) ?>
                    <tr>
                        <td><?php echo $klass_user->first_name; ?></td>
                        <td><?php echo $klass_user->last_name; ?></td>
                        <td align="center">
                            <a href="/teacher/view/<?php echo $klass_user->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>

                            <?php if ($user->sys() || $user->admin()): ?>
                                &nbsp;&nbsp;
                                <a href="/klassteachers/delete/<?php echo $element->id; ?>/<?php echo $klass_id; ?>/<?php echo $year_id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
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
        <a href="/klassteachers/add_in_klass/<?php echo $klass_id; ?>/<?php echo $year_id; ?>" class="btn btn-default">Adauga</a>
    </div>
</div>