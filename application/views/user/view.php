<table>
    <thead>
        <tr>
            <th colspan="2">Informatii</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nume utilizator</td>
            <td><?php echo $user->username; ?></td>
        </tr>
        
        <tr>
            <td>Parola</td>
            <td><?php echo $user->password; ?></td>
        </tr>
        
        <tr>
            <td>Nume complet</td>
            <td><?php echo $user->full_name(); ?></td>
        </tr>
        
        <tr>
            <td>Nume</td>
            <td><?php echo $user->last_name; ?></td>
        </tr>
        
        <tr>
            <td>Prenume</td>
            <td><?php echo $user->first_name; ?></td>
        </tr>
        
        <tr>
            <td>CNP</td>
            <td><?php echo $user->cnp; ?></td>
        </tr>
        
        <tr>
            <td>Data nasterii</td>
            <td><?php echo $user->birthday; ?></td>
        </tr>
        
        <tr>
            <td>Adresa</td>
            <td><?php echo $user->address; ?></td>
        </tr>
        
        <tr>
            <td>Email</td>
            <td><?php echo $user->email; ?></td>
        </tr>
        
        <tr>
            <td>Telefon</td>
            <td><?php echo $user->phone; ?></td>
        </tr>
        
        <tr>
            <td>Ultima logare</td>
            <td><?php echo $user->last_login; ?></td>
        </tr>
        
        <tr>
            <td>Creat la</td>
            <td><?php echo $user->created_at; ?></td>
        </tr>
        
        <tr>
            <td>Tip cont</td>
            <td><?php echo $user->account_type(); ?></td>
        </tr>
    </tbody>
</table>