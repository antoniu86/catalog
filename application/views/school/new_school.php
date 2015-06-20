<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/schools/list_all">Scoli</a></li>
  <li class="active">Adauga</li>
</ol>

<form action="/school/create" method="POST">
    <div class="row">
        <div class="col-md-5">
            <fieldset>
                <legend>Scoala</legend>

                <?php $this->render_view('new_school'); ?>
            </fieldset>
        </div>

        <div class="col-md-6 col-md-offset-1">
            <fieldset>
                <legend>Administrator</legend>

                <?php $this->render_view('user/_new_user'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/schools/list_all" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>