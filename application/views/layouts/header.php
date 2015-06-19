<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->get('page_title'); ?></title>

        <?php echo $html->includeJs('jquery'); ?>
        <?php echo $html->includeJs('bootstrap'); ?>
        <?php echo $html->includeJs('jquery-ui'); ?>
        <?php echo $html->includeJs('jquery-confirm'); ?>
        <?php echo $html->includeJs('custom'); ?>

        <?php echo $html->includeCss('bootstrap'); ?>
        <?php echo $html->includeCss('bootstrap-theme'); ?>
        <?php echo $html->includeCss('jquery-ui'); ?>
        <?php echo $html->includeCss('jquery-confirm'); ?>
        <?php echo $html->includeCss('custom'); ?>

    </head>
    <body>
        <div class="container-fluid">
            <?php if ($logged == true): ?>
                <?php $this->render_view('layouts/main_nav'); ?>
            <?php endif; ?>