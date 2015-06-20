<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/years/list_all">Ani scolari</a></li>
    <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
    <li class="active">Perioade</li>
</ol>

<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Perioada an scolar</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($periods as $value): $value = convert_array_to_object('period', $value["Period"]) ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td align="center">
                            <a href="/period/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/period/edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Editare">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/period/delete/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
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
        <a href="/period/new_period/<?php echo $year_id; ?>" class="btn btn-default">Adauga</a>
    </div>
</div>