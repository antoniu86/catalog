<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th colspan="2">Utilizator</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nume utilizator</td>
                    <td><?php echo $selected_user->username; ?></td>
                </tr>

                <tr>
                    <td>Parola</td>
                    <td><?php echo $selected_user->password; ?></td>
                </tr>

                <tr>
                    <td>Nume complet</td>
                    <td><?php echo $selected_user->full_name(); ?></td>
                </tr>

                <tr>
                    <td>Nume</td>
                    <td><?php echo $selected_user->last_name; ?></td>
                </tr>

                <tr>
                    <td>Prenume</td>
                    <td><?php echo $selected_user->first_name; ?></td>
                </tr>

                <tr>
                    <td>CNP</td>
                    <td><?php echo $selected_user->cnp; ?></td>
                </tr>

                <tr>
                    <td>Data nasterii</td>
                    <td><?php echo $selected_user->birthday; ?></td>
                </tr>

                <tr>
                    <td>Adresa</td>
                    <td><?php echo $selected_user->address; ?></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><?php echo $selected_user->email; ?></td>
                </tr>

                <tr>
                    <td>Telefon</td>
                    <td><?php echo $selected_user->phone; ?></td>
                </tr>

                <tr>
                    <td>Ultima logare</td>
                    <td><?php echo $selected_user->last_login; ?></td>
                </tr>

                <tr>
                    <td>Creat la</td>
                    <td><?php echo $selected_user->created_at; ?></td>
                </tr>

                <tr>
                    <td>Tip cont</td>
                    <td><?php echo $selected_user->account_type(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
