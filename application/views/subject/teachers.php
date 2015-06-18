<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-condensed table-responsive table-hover">
            <thead>
                <tr>
                    <th>Profesori</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($teachers as $value): $value = convert_array_to_object('user', $value['User']) ?>
                    <tr>
                        <td><?php echo $value->full_name(); ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
