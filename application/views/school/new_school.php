<form action="/school/create" method="POST">
    <div class="row">
        <div class="col-md-5">
            <fieldset>
                <legend>Scoala</legend>

                <label for="school_name">Denumire institutie</label><br>
                <input type="text" name="school[name]" id="school_name"><br>

                <label for="school_contact">Contact</label><br>
                <textarea name="school[contact]" id="school_contact"></textarea><br>

                <label for="school_info">Informatii</label><br>
                <textarea name="school[info]" id="school_info"></textarea>
            </fieldset>
        </div>

        <div class="col-md-5 col-md-offset-2">
            <fieldset>
                <legend>Administrator</legend>

                <label for="user_last_name">Nume</label><br>
                <input type="text" name="user[last_name]" id="user_last_name"><br>

                <label for="user_first_name">Prenume</label><br>
                <input type="text" name="user[first_name]" id="user_first_name"><br>

                <label for="user_email">Email</label><br>
                <input type="email" name="user[email]" id="user_email"><br>

                <label for="user_cnp">CNP</label><br>
                <input type="text" name="user[cnp]" id="user_cnp"><br>

                <label for="user_username">Nume utilizator</label><br>
                <input type="text" name="user[username]" id="user_username"><br>

                <label for="user_password">Parola</label><br>
                <input type="text" name="user[password]" id="user_password"><br>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit">Salveaza</button>
        </div>
    </div>
</form>