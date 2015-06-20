<ol class="breadcrumb">
  <li><a href="/">Home</a></li>
  <li><a href="/teachers/list_all">Profesori</a></li>
  <li class="active">Adauga</li>
</ol>

<form action="/user/create_teacher" method="POST">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
                <legend>Profesor</legend>

                <?php $this->render_view('user/_new_user'); ?>

                <?php $subjects = new Subject(); ?>
                <?php $subjects = $subjects->find_all($school->id); ?>

                <label for="user_subject_id">Tip cont</label><br>
                <select name="user[subject_id]" id="user_subject_id" class="form-control" data-validate="required">
                    <?php foreach ($subjects as $key => $value): ?>
                        <option value="<?php echo $value["Subject"]["id"]; ?>"><?php echo $value["Subject"]["name"] ?></option>
                    <?php endforeach; ?>
                </select><br>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
            <a href="/teachers/list_all" class="btn btn-default">Renunta</a>
        </div>
    </div>
</form>