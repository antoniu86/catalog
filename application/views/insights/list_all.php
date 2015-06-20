<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Noutati</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Titlu</th>
                    <th>Continut</th>
                    <th>Data</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($insights as $value): $value = convert_array_to_object('insight', $value["Insight"]) ?>
                    <tr>
                        <td><?php echo $value->title; ?></td>
                        <td><?php echo $value->intro_text(); ?></td>
                        <td><?php echo $value->created_at; ?></td>
                        <td align="center">
                            <a href="/insight/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/insight/edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/insight/delete/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
        <a href="/insight/new_insight" class="btn btn-default">Adauga</a>
    </div>
</div>