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
        <div class="container">
            <header id="header">
                <div class="row">
                    <div class="top-bar col-xs-12 col-md-9 col-lg-7 pull-right">
                        <div class="navbar">
                            <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <nav class="collapse navbar-collapse bs-navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <div id="serverQuickControl">
                                            <select>
                                                <option>192.168.13.37</option>
                                                <option>80.08.1.35</option>
                                                <option>127.0.0.1</option>
                                            </select>

                                            <ul id="serverQuickControlOptions">
                                                <li><i class="btn btn-danger glyphicon glyphicon-off"></i></li>
                                                <li><i class="btn btn-info glyphicon glyphicon-repeat"></i></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li>
                                        <a href="index.html" data-original-title="" title="">User management</a>
                                    </li>
                                    <li>
                                        <a href="index.html" data-original-title="" title="">Manage servers</a>
                                    </li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title=""><i class="icon-user"></i> <?php echo ucfirst(AuthComponent::user('username')); ?><b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-original-title="" title="">Profile Settings</a></li>
                                            <li class="divider"></li>
                                            <li><a href="/users/logout" data-original-title="" title="">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div id="menu" class="navbar">
                            <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">MCCP</a>
                            </div>

                            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="index.html" data-original-title="" title="">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="graphs.html" data-original-title="" title="">Configuration</a>
                                    </li>
                                    <li>
                                        <a href="graphs.html" data-original-title="" title="">Management</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Plugins <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-original-title="" title="">View installed</a></li>
                                            <li><a href="#" data-original-title="" title="">Find &amp; Install</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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
    </body>
</html>
