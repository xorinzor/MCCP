<?php
$cakeDescription = __d('cake_dev', 'MCCP');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <title>MCCP - <?php echo $title_for_layout; ?></title>

    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('theme');

    echo $this->Html->script('jquery');
    echo $this->Html->script('jquery_migrate');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('app/theme');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <!--[if lte IE 8]>
    <?php
            echo $this->fetch('scriptOldIE');
    ?>
    <![endif]-->
</head>

<body>
    <div class="hidden-xs hidden-sm" id="hotbarLeft">
        <div class="btn btn-info"><p class="btn-text"><i class="glyphicon glyphicon-list-alt"></i> Console</p></div>
    </div>
    <div class="container hotbar-enabled" id="wrapper">
        <header id="header">
            <div class="row">
                <?php echo $this->element('topbar'); ?>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <?php echo $this->element('menu'); ?>
                </div>
            </div>
        </header>

        <div id="maincontent" class="container">
            <?php
            echo $this->Session->flash();
            echo $this->fetch('content');
            ?>
        </div>

        <div class="row">
            <div id="footer">
                <p>&copy; 2014 MCCP - All rights reserved</p>
            </div>
        </div>
    </div>

    <?php
    echo $this->Js->writeBuffer();
    ?>
</body>
</html>