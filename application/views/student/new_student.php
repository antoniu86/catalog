<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/students/list_all">Elevi</a></li>
  <li class="active">Adauga</li>
</ol>

<form action="/user/create_student" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Elev</legend>
                
                <?php $this->render_view('user/_new_user'); ?>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/students/list_all" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>