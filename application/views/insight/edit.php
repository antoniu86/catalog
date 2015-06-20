<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/insights/list_all">Noutati</a></li>
  <li><a href="/insight/view/<?php echo $selected_insight->id; ?>"><?php echo $selected_insight->short_title(); ?></a></li>
  <li class="active">Editare</li>
</ol>

<form action="/insight/save/<?php echo $selected_insight->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Noutate</legend>

                <?php $this->render_view('edit_insight'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/insight/view/<?php echo $selected_insight->id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>