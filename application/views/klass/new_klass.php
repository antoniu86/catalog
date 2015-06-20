<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
  <li><a href="/klasses/list_all/<?php echo $year_id; ?>">Clase</a></li>
  <li class="active">Adauga</li>
</ol>

<form action="/klass/create/<?php echo $year_id; ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Clasa</legend>
                
                <?php $this->render_view('new_klass'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/klasses/list_all/<?php echo $year_id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>