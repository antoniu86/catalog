<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li><a href="/year/view/<?php echo $selected_year->id; ?>"><?php echo $selected_year->name; ?></a></li>
  <li class="active">Editare</li>
</ol>

<form action="/year/save/<?php echo $selected_year->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>An scolar</legend>

                <?php $this->render_view('edit_year'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/year/view/<?php echo $selected_year->id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>