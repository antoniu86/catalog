<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <?php if ($user->sys()): ?>
        <li><a href="/schools/list_all">Scoli</a></li>
    <?php endif; ?>
        <li><a href="/school/view/<?php echo $selected_school->id; ?>"><?php echo $selected_school->name; ?></a></li>
    <li class="active">Editare</li>
</ol>

<form action="/school/save/<?php echo $selected_school->id ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Scoala</legend>

                <?php $this->render_view('edit_school'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/school/view/<?php echo $selected_school->id; ?>" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>