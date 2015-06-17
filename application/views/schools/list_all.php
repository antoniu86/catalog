<div class="row">
    <div class="col-md-12">

        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Denumire</th>
                    <th style="text-align: center" width="100">Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($schools as $value): var_dump($value["School"]) ?>
                    <tr>
                        <td><?php echo $value["School"]["name"]; ?></td>
                        <td align="center">
                            <a href="/school/view/<?php echo $value["School"]["id"]; ?>">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
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