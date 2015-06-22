<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<?php $klass = new Klass(); ?>
<?php $klass = $klass->find($klass_id); ?>

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li><a href="/years/list_all">Ani scolari</a></li>
    <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
    <li><a href="/klasses/list_all/<?php echo $year_id; ?>">Clase</a></li>
    <li><a href="/klass/view/<?php echo $klass_id; ?>"><?php echo $klass[0]['Klass']['name']; ?></a></li>
    <li><a href="/klassstudents/list_all/<?php echo $klass_id; ?>/<?php echo $year_id; ?>">Elevi</a></li>
    <li class="active">Adauga</li>
</ol>


<form action="/klassstudents/save/<?php echo $klass_id; ?>/<?php echo $year_id; ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
                <thead>
                    <tr>
                        <th width="30"></th>
                        <th>Nume</th>
                        <th>Prenume</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($klass_students as $value): ?>
                        <?php $klass_user = convert_array_to_object('user', $value["User"]) ?>
                        <tr>
                            <td align="center">
                                <input type="checkbox" name="user[id][<?php echo $klass_user->id; ?>]" id="user_id_<?php echo $klass_user->id; ?>" value="<?php echo $klass_user->id; ?>">
                            </td>
                            <td><?php echo $klass_user->first_name; ?></td>
                            <td><?php echo $klass_user->last_name; ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/klassstudents/list_all/<?php echo $klass_id; ?>/<?php echo $year_id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>