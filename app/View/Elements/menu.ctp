<div id="menu" class="navbar">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'servers', 'action' => 'all')); ?>">MCCP</a>
    </div>

    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
            <?php
                if($this->params['controller'] == 'servers'):
                    if(in_array($this->params['action'], array('all', 'add', 'edit'))):
            ?>
                <li <?php if($this->params['action'] == 'all') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'action' => 'all')); ?>" data-original-title="" title="">Server list</a>
                </li>
                <li <?php if($this->params['action'] == 'add') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'action' => 'add')); ?>" data-original-title="" title="">Add server</a>
                </li>
            <?php
                else:
            ?>
                <li <?php if($this->params['action'] == 'dashboard') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => $this->params['server'], 'action' => 'dashboard')); ?>" data-original-title="" title="">Dashboard</a>
                </li>
                <li <?php if($this->params['action'] == 'configuration') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => $this->params['server'], 'action' => 'configuration')); ?>" data-original-title="" title="">Configuration</a>
                </li>
                <li <?php if($this->params['action'] == 'control') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => $this->params['server'], 'action' => 'control')); ?>" data-original-title="" title="">Control</a>
                </li>
                <li class="dropdown  <?php if($this->params['action'] == 'plugins') { echo 'active'; } ?>">
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => $this->params['server'], 'action' => 'plugins')); ?>" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Plugins <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-original-title="" title="">View installed</a></li>
                        <li><a href="#" data-original-title="" title="">Find &amp; Install</a></li>
                    </ul>
                </li>
            <?php
                    endif;
                elseif($this->params['controller'] == 'users'):
            ?>
                <li <?php if($this->params['action'] == 'all') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'all')); ?>" data-original-title="" title="">User list</a>
                </li>
                <li <?php if($this->params['action'] == 'add') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')); ?>" data-original-title="" title="">Add user</a>
                </li>
            <?php
                else:
            ?>
                <li <?php if($this->params['controller'] == 'users' && $this->params['action'] == 'all') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'all')); ?>" data-original-title="" title="">User Management</a>
                </li>
                <li <?php if($this->params['controller'] == 'servers' && $this->params['action'] == 'all') { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'action' => 'all')); ?>" data-original-title="" title="">Manage Servers</a>
                </li>
            <?php
                endif;
            ?>
        </ul>
    </nav>
</div>