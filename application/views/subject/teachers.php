<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/subjects/list_all">Materii</a></li>
    <li><a href="/subject/view/<?php echo $subject[0]["Subject"]["id"]; ?>"><?php echo $subject[0]["Subject"]["name"]; ?></a></li>
    <li class="active">Profesori</li>
</ol>

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
                        <td width="80" align="center">
                            <a href="/teacher/view/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </a>

                            <?php if ($user->sys() || $user->admin()): ?>
                                &nbsp;&nbsp;
                                <a href="/subject/delete_teacher/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" title="Sterge">
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
