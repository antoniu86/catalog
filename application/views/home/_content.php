<div class="row">
    <div class="col-md-12">
        <h2>Bine ai venit <?php echo $user->full_name(); ?>!</h2>
    </div>
</div>

<?php if (!$user->sys()): ?>
    <div class="row">
        <div class="col-md-12">
            <?php $this->render_view('insights'); ?>
        </div>
    </div>
<?php endif; ?>
