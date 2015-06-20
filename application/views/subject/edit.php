<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/subjects/list_all">Materii</a></li>
  <li><a href="/subject/view/<?php echo $selected_subject->id; ?>"><?php echo $selected_subject->name; ?></a></li>
  <li class="active">Editare</li>
</ol>

<form action="/subject/save/<?php echo $selected_subject->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Materie</legend>

                <?php $this->render_view('edit_subject'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/subject/view/<?php echo $selected_subject->id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>