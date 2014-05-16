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

        echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>MCCP - Minecraft Control Panel</h1>
		</div>
		<div id="content">
            <p>The default layout file is located at app/View/Layouts/default.ctp</p>

			<?php
                echo $this->Session->flash();
                echo $this->fetch('content');
            ?>
		</div>
		<div id="footer">
            <p>&copy;2014 MCCP</p>
		</div>
	</div>
	<?php
        /* We have the DebugKit so we don't need this anymore
         * echo $this->element('sql_dump');
         */
    ?>
</body>
</html>
