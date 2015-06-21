<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Ani scolari</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>An scolar</th>
                    <th style="text-align: center" width="170">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($years as $value): $value = convert_array_to_object('year', $value["Year"]) ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td align="center">
                            <a href="/year/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>

                            <?php if ($user->sys() || $user->admin()): ?>
                                &nbsp;&nbsp;
                                <a href="/year/edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                            <?php endif; ?>

                            &nbsp;&nbsp;
                            <a href="/periods/list_all/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Perioade">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/klasses/list_all/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Clase">
                                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            </a>

                            <?php if ($user->sys() || $user->admin()): ?>
                                &nbsp;&nbsp;
                                <a href="/year/delete/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
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
        <a href="/year/new_year" class="btn btn-default">Adauga</a>
    </div>
</div>