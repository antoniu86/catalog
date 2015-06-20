<?php if ($logged == false): ?>
    <?php $this->render_view('login_form'); ?>
<?php else: ?>
    <?php $this->render_view('content'); ?>
<?php endif; ?>