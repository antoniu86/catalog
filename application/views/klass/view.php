<?php $year_id = $selected_klass->year_id; ?>
<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
  <li><a href="/klasses/list_all/<?php echo $year_id; ?>">Clase</a></li>
  <li class="active"><?php echo $selected_klass->name; ?></li>
</ol>

<div class="row">
    <div class="col-md-12">
        <?php if ($user->sys() || $user->admin()): ?>
            <a href="/klass/edit/<?php echo $selected_klass->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
        <?php endif; ?>
        <br><br>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Clasa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denumire</td>
                    <td><?php echo $selected_klass->name; ?></td>
                </tr>

                <tr>
                    <td>Diriginte</td>
                    <td><?php echo $teacher->full_name(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
