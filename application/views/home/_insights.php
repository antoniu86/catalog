<h3>Noutati</h3>

<?php $insights = new Insight(); ?>
<?php $insights = $insights->find_all($school->id); ?>

<?php if (count($insights) == 0): ?>
    <p>Nu au fost postate noutati</p>
<?php else: ?>
    <?php foreach ($insights as $value): $value = convert_array_to_object('insight', $value['Insight']); ?>
        <div class="insight">
            <h5><?php echo $value->title; ?></h5>
            <span class="label label-success"><?php echo $value->created_at; ?></span>
            <p><?php echo $value->text; ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>