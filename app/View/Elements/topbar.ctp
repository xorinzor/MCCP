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
                            <option>Select server</option>
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
                <li <?php if($this->params['controller'] == 'users' && in_array($this->params['action'], array('all','add'))) { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'all')); ?>" data-original-title="" title="">User management</a>
                </li>
                <li <?php if($this->params['controller'] == 'servers' && in_array($this->params['action'], array('all','add'))) { echo 'class="active"'; } ?>>
                    <a href="<?php echo $this->Html->url(array('controller' => 'servers', 'action' => 'all')); ?>" data-original-title="" title="">Server management</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title=""><i class="icon-user"></i> <?php echo ucfirst(AuthComponent::user('username')); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'profile')); ?>" data-original-title="" title="">Profile Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')); ?>" data-original-title="" title="">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>