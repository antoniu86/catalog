<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/years/list_all">Ani scolari</a></li>
    <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
    <li class="active">Clase</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Clase</th>
                    <th>Diriginte</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($klasses as $value): $value = convert_array_to_object('klass', $value["Klass"]) ?>
                    <?php $teacher = convert_array_to_object('user', $value->get_main_teacher()[0]["User"]) ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $teacher->full_name(); ?></td>
                        <td align="center">
                            <a href="/klass/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>

                            <?php if ($user->sys() || $user->admin()): ?>
                                &nbsp;&nbsp;
                                <a href="/klass/edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                &nbsp;&nbsp;
                                <a href="/klass/delete/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
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
        <a href="/klass/new_klass/<?php echo $year_id; ?>" class="btn btn-default">Adauga</a>
    </div>
</div>