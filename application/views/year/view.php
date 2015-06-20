<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li class="active"><?php echo $selected_year->name; ?></li>
</ol>

<div class="row">
    <div class="col-md-12">
        <?php if ($user->sys() || $user->admin()): ?>
            <a href="/year/edit/<?php echo $selected_year->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
        <?php endif; ?>

        <a href="/periods/list_all/<?php echo $selected_year->id; ?>" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;&nbsp;Perioade
        </a>
        
        <a href="/klasses/list_all/<?php echo $selected_year->id; ?>" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;&nbsp;Clase
        </a>
        <br><br>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">An scolar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denumire</td>
                    <td><?php echo $selected_year->name; ?></td>
                </tr>

                <tr>
                    <td>Incepe la</td>
                    <td><?php echo $selected_year->start_at; ?></td>
                </tr>

                <tr>
                    <td>Sfarseste la</td>
                    <td><?php echo $selected_year->end_at; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
