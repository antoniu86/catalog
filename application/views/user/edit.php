<form action="/user/save/<?php echo $selected_user->id; ?>" method="POST">

    <div class="row">
        <div class="col-lg-12">

            <fieldset>
                <legend>Informatii</legend>

                <label for="user_last_name">Nume</label><br>
                <input type="text" name="user[last_name]" id="user_last_name" value="<?php echo $selected_user->last_name; ?>" class="form-control"><br>

                <label for="user_first_name">Prenume</label><br>
                <input type="text" name="user[first_name]" id="user_first_name" value="<?php echo $selected_user->first_name; ?>" class="form-control"><br>

                <label for="user_cnp">CNP</label><br>
                <?php if ($user->sys() || $user->admin()): ?>
                    <input type="text" name="user[cnp]" id="user_cnp" value="<?php echo $selected_user->cnp; ?>" class="form-control"><br>
                <?php else: ?>
                    <input type="text" name="cnp" id="user_cnp" value="<?php echo $selected_user->cnp; ?>" class="form-control" readonly><br>
                <?php endif; ?>

                <label for="datepicker">Data nasterii</label><br>
                <input type="text" name="user[birthday]" id="datepicker" value="<?php echo $selected_user->birthday; ?>" class="form-control"><br>

                <label for="user_address">Adresa</label><br>
                <textarea name="user[address]" id="user_address" class="form-control"><?php echo $selected_user->address; ?></textarea><br>

                <label for="user_email">Email</label><br>
                <input type="email" name="user[email]" id="user_email" value="<?php echo $selected_user->email; ?>" class="form-control"><br>

                <label for="user_phone">Phone</label><br>
                <input type="text" name="user[phone]" id="user_phone" value="<?php echo $selected_user->phone; ?>" class="form-control"><br>

                <label for="user_username">Nume utilizator</label><br>
                <?php if ($user->sys() || $user->admin()): ?>
                    <input type="text" name="user[username]" id="user_username" value="<?php echo $selected_user->username; ?>" class="form-control"><br>
                <?php else: ?>
                    <input type="text" name="username" id="user_username" value="<?php echo $selected_user->username; ?>" class="form-control" readonly><br>
                <?php endif; ?>

                <label for="user_password">Parola</label><br>
                <input type="text" name="user[password]" id="user_password" value="<?php echo $selected_user->password; ?>" class="form-control"><br>

                <?php if ($selected_user->teach() && ($user->sys() || $user->admin())): ?>
                    <?php $subject = convert_array_to_object('subject', $selected_user->get_subject()[0]["Subject"]); ?>
                    <?php $subjects = new Subject(); ?>
                    <?php $subjects = $subjects->find_all($selected_user->school_id); ?>

                    <label for="user_subject_id">Tip cont</label><br>
                    <select name="user[subject_id]" id="user_subject_id" class="form-control">
                        <?php foreach ($subjects as $key => $value): ?>
                            <option value="<?php echo $value["Subject"]["id"]; ?>"<?php if ($value["Subject"]["id"] == $subject->id){ echo ' selected'; } ?>><?php echo $value["Subject"]["name"] ?></option>
                        <?php endforeach; ?>
                    </select><br>

                <?php endif; ?>

            </fieldset>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>