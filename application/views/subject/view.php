<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/subjects/list_all">Materii</a></li>
  <li class="active"><?php echo $selected_subject->name; ?></li>
</ol>

<div class="row">
    <div class="col-md-12">
        <?php if ($user->sys() || $user->admin()): ?>
            <a href="/subject/edit/<?php echo $selected_subject->id; ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Modifica
            </a>
        <?php endif; ?>

        <a href="/subject/teachers/<?php echo $selected_subject->id; ?>" class="btn btn-primary btn-sm">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Profesori
        </a>
        <br><br>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Materie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Denumire</td>
                    <td><?php echo $selected_subject->name; ?></td>
                </tr>

                <tr>
                    <td>Descriere</td>
                    <td><?php echo $selected_subject->description; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
