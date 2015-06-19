<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Profesori</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($teachers as $value): $value = convert_array_to_object('user', $value['User']) ?>
                    <tr>
                        <td><?php echo $value->full_name(); ?></td>
                        <td width="40" align="center">
                            <a href="/user/view/<?php echo $value->id; ?>">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
