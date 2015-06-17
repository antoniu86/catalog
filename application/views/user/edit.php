<form action="/user/save/<?php echo $user->id; ?>" method="POST">

    <div class="row">
        <div class="col-lg-12">

            <fieldset>
                <legend>Informatii</legend>

                <label for="user_last_name">Nume</label><br>
                <input type="text" name="user[last_name]" id="user_last_name" value="<?php echo $selected_user->last_name; ?>" class="form-control"><br>

                <label for="user_first_name">Prenume</label><br>
                <input type="text" name="user[first_name]" id="user_first_name" value="<?php echo $selected_user->first_name; ?>" class="form-control"><br>

                <label for="user_cnp">CNP</label><br>
                <input type="text" name="user[cnp]" id="user_cnp" value="<?php echo $selected_user->cnp; ?>" class="form-control"><br>

                <label for="user_birthday">Data nasterii</label><br>
                <input type="text" name="user[birthday]" id="user_birthday" value="<?php echo $selected_user->birthday; ?>" class="form-control"><br>

                <label for="user_address">Adresa</label><br>
                <textarea name="user[address]" id="user_address" class="form-control"><?php echo $selected_user->address; ?></textarea><br>

                <label for="user_email">Email</label><br>
                <input type="email" name="user[email]" id="user_email" value="<?php echo $selected_user->email; ?>" class="form-control"><br>

                <label for="user_phone">Phone</label><br>
                <input type="text" name="user[phone]" id="user_phone" value="<?php echo $selected_user->phone; ?>" class="form-control"><br>

                <label for="user_password">Parola</label><br>
                <input type="text" name="user[password]" id="user_password" value="<?php echo $selected_user->password; ?>" class="form-control"><br>

            </fieldset>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default">Salveaza</button>
        </div>
    </div>
</form>