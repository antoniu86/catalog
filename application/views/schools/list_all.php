<div class="row">
    <div class="col-md-12">

        <table>
            <thead>
                <tr>
                    <th>Denumire</th>
                    <th>Optiuni</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($schools as $value): var_dump($value["School"]) ?>
                    <tr>
                        <td><?php echo $value["School"]["name"]; ?></td>
                        <td><a href="/school/view/<?php echo $value["School"]["id"]; ?>">detalii</a></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>