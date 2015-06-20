<?php $year_id = $selected_period->year_id; ?>
<?php $year = new Year(); ?>
<?php $year = $year->find($year_id); ?>

<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li><a href="/year/view/<?php echo $year_id; ?>"><?php echo $year[0]['Year']['name']; ?></a></li>
  <li><a href="/periods/list_all/<?php echo $year_id; ?>">Perioade</a></li>
  <li><a href="/period/view/<?php echo $selected_period->id; ?>"><?php echo $selected_period->name; ?></a></li>
  <li class="active">Editare</li>
</ol>

<form action="/period/save/<?php echo $selected_period->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Perioada an scolar</legend>

                <?php $this->render_view('edit_period'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/period/view/<?php echo $selected_period->id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>