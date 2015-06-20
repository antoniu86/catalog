<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/insights/list_all">Noutati</a></li>
  <li class="active">Adauga</li>
</ol>

<form action="/insight/create" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Noutate</legend>
                
                <?php $this->render_view('new_insight'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/insights/list_all" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>