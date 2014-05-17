<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'MCCP');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
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
            echo $this->Html->script('theme');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <header id="header">
                        <div class="top-bar">
                            <div class="navbar pull-right" role="navigation">
                                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="index.html" data-original-title="" title="">User management</a>
                                        </li>
                                        <li>
                                            <a href="index.html" data-original-title="" title="">Server management</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Select Server <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li class="active"><a href="#" data-original-title="" title="">192.168.13.37</a></li>
                                                <li><a href="#" data-original-title="" title="">80.08.1.35</a></li>
                                                <li><a href="#" data-original-title="" title="">127.0.0.1</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title=""><i class="icon-user"></i> Xorinzor <b class="caret"></b></a>
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

                        <div id="menu" class="navbar" role="navigation">
                            <div class="navbar-header">
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
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Plugins <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-original-title="" title="">View installed</a></li>
                                            <li><a href="#" data-original-title="" title="">Find &amp; Install</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="graphs.html" data-original-title="" title="">Management</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </header>
                </div>
            </div>

            <div class="row">
                <div id="maincontent">
                    <?php
                        echo $this->Session->flash();
                        echo $this->fetch('content');
                    ?>
                </div>
            </div>

            <div class="row">
                <div id="footer">
                    <p>&copy; 2014 MCCP - All rights reserved</p>
                </div>
            </div>
        </div>
    </body>
</html>
