<?php $year_id = $selected_klass->year_id; ?>
<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
  <li><a href="/klasses/list_all/<?php echo $year_id; ?>">Clase</a></li>
  <li><a href="/klass/view/<?php echo $selected_klass->id; ?>"><?php echo $selected_klass->name; ?></a></li>
  <li class="active">Editare</li>
</ol>

<form action="/klass/save/<?php echo $selected_klass->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Clasa</legend>

                <?php $this->render_view('edit_klass'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/klass/view/<?php echo $selected_klass->id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>