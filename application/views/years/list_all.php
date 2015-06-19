<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>An scolar</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($years as $value): $value = convert_array_to_object('year', $value["Year"]) ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td align="center">
                            <a href="/year/view/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/year/edit/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/periods/list_all/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
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
        <a href="/year/new_year" class="btn btn-default">Adauga</a>
    </div>
</div>