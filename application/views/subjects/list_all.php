<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Denumire</th>
                    <th>Descriere</th>
                    <th style="text-align: center" width="120">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($subjects as $value): $value = convert_array_to_object('subject', $value["Subject"]) ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->description; ?></td>
                        <td align="center">
                            <a href="/subject/view/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/subject/edit/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            &nbsp;&nbsp;
                            <a href="/subject/teachers/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
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
        <a href="/subject/new_subject" class="btn btn-default">Adauga</a>
    </div>
</div>