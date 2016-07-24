<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Station Games';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <title> Station Games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript">
        var urlForJs="<?php echo SITE_URL ?>";
    </script>
    <?php
    echo $this->Html->meta('icon');
    /* Bootstrap CSS */
    echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css?q='.QRDN);

    /* Usermgmt Plugin CSS */
    echo $this->Html->css('/usermgmt/css/umstyle.css?q='.QRDN);

    /* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
    echo $this->Html->css('/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css?q='.QRDN);

    /* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
    echo $this->Html->css('/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css?q='.QRDN);

    /* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
    echo $this->Html->css('/plugins/chosen/chosen.min.css?q='.QRDN);

    /* Toastr is taken from https://github.com/CodeSeven/toastr */
    echo $this->Html->css('/plugins/toastr/build/toastr.min.css?q='.QRDN);

    /* Jquery latest version taken from http://jquery.com */
    echo $this->Html->script('/plugins/jquery-1.11.3.min.js');

    /* Bootstrap JS */
    echo $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js?q='.QRDN);

    /* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
    echo $this->Html->script('/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?q='.QRDN);

    /* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
    echo $this->Html->script('/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?q='.QRDN);

    /* Bootstrap Typeahead is taken from https://github.com/biggora/bootstrap-ajax-typeahead */
    echo $this->Html->script('/plugins/bootstrap-ajax-typeahead/js/bootstrap-typeahead.min.js?q='.QRDN);

    /* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
    echo $this->Html->script('/plugins/chosen/chosen.jquery.min.js?q='.QRDN);

    /* Toastr is taken from https://github.com/CodeSeven/toastr */
    echo $this->Html->script('/plugins/toastr/build/toastr.min.js?q='.QRDN);

    /* Usermgmt Plugin JS */
    echo $this->Html->script('/usermgmt/js/umscript.js?q='.QRDN);
    echo $this->Html->script('/usermgmt/js/ajaxValidation.js?q='.QRDN);

    echo $this->Html->script('/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q='.QRDN);

    echo $this->Html->css('base.css');
    echo $this->Html->css('cake.css'); 

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation" style="background:#2F4F4F !important;">
        <ul class="title-area large-3 medium-4 columns" style="background:#2F4F4F !important;">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right"> 
                <li><?php if($this->UserAuth->isLogged()) { echo $this->Html->link(__('Dashboard'),SITE_URL.'dashboard'); ?></li>
                <li><?php echo $this->Html->link(__('Logout'),SITE_URL.'usermgmt/users/logout'); } ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>

    <div class="container" style="width: 100%;">
        <div class="content">
            <?php echo $this->element('Usermgmt.message_notification'); ?>
            <?php echo $this->fetch('content'); ?>
            <div style="clear:both"></div>
        </div>
    </div>

    <footer>
    <div id="footer">
        <div class="container">
            <p class="muted">Copyright &copy; <?php echo date('Y');?> Your Site. All Rights Reserved. <a href="http://github.com/Vini85428026" target='_blank'>Developed By</a>.</p>
        </div>
    </div>
    </footer>
</body>
</html>

<style type="text/css">
    .top-bar-section li:not(.has-form) a:not(.button) {
    background: #2F4F4F;
}
</style>

