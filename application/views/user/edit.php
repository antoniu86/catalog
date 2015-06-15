<form action="/user/save/<?php echo $user->id; ?>" method="POST">
    <table>
        <thead>
            <tr>
                <th colspan="2">Informatii</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nume</td>
                <td><input type="text" name="user[last_name]" id="user_last_name" value="<?php echo $user->last_name; ?>"></td>
            </tr>

            <tr>
                <td>Prenume</td>
                <td><input type="text" name="user[first_name]" id="user_first_name" value="<?php echo $user->first_name; ?>"></td>
            </tr>

            <tr>
                <td>CNP</td>
                <td><input type="text" name="user[cnp]" id="user_cnp" value="<?php echo $user->cnp; ?>"></td>
            </tr>

            <tr>
                <td>Data nasterii</td>
                <td><input type="text" name="user[birthday]" id="user_birthday" value="<?php echo $user->birthday; ?>"></td>
            </tr>

            <tr>
                <td>Adresa</td>
                <td><textarea name="user[address]" id="user_address"><?php echo $user->address; ?></textarea></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="user[email]" id="user_email" value="<?php echo $user->email; ?>"></td>
            </tr>

            <tr>
                <td>Telefon</td>
                <td><input type="text" name="user[phone]" id="user_phone" value="<?php echo $user->phone; ?>"></td>
            </tr>
            
            <tr>
                <td>Parola</td>
                <td><input type="text" name="user[password]" id="user_password" value="<?php echo $user->password; ?>"></td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <button type="submit">Salveaza</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>