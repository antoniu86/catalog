<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Scoli</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Denumire</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                    <th>Administrator</th>
                    <th style="text-align: center" width="80">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($schools as $value): $value = convert_array_to_object('school', $value["School"]) ?>
                    <?php $admin = $value->get_admin();
                    $admin = convert_array_to_object('user', $admin[0]['User']); ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td align='center'>
                            <a href="/school/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/school/edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/school/delete/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </td>
                        <td><?php echo $admin->full_name(); ?></td>
                        <td align="center">
                            <a href="/user/view/<?php echo $admin->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/user/edit/<?php echo $admin->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
<?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href="/school/new_school" class="btn btn-default">Adauga</a>
    </div>
</div>