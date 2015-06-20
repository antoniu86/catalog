<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/years/list_all">Ani scolari</a></li>
  <li class="active">Adauga</li>
</ol>

<form action="/year/create" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>An scolar</legend>
                
                <?php $this->render_view('new_year'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/years/list_all" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>