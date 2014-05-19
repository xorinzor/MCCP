<?php
$this->layout = 'default';
$title_for_layout = 'Servers list';
?>

<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Server list</h3>
            </div>
            <div class="panel-body">
                <p>Server listing here</p>

                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>IP:port</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => '1', 'action' => 'dashboard')); ?>">Server #1</a></td>
                            <td>192.168.13.37:25565</td>
                            <td><span class="label label-success">Online</span></td>
                            <td>
                                <i class="btn btn-danger glyphicon glyphicon-off"></i>
                                <i class="btn btn-info glyphicon glyphicon-repeat"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => '2', 'action' => 'dashboard')); ?>">Server #2</a></td>
                            <td>80.08.1.35:25565</td>
                            <td><span class="label label-success">Online</span></td>
                            <td>
                                <i class="btn btn-danger glyphicon glyphicon-off"></i>
                                <i class="btn btn-info glyphicon glyphicon-repeat"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo $this->Html->url(array('controller' => 'servers', 'server' => '3', 'action' => 'dashboard')); ?>">Server #3</a></td>
                            <td>127.0.0.1:25565</td>
                            <td><span class="label label-success">Online</span></td>
                            <td>
                                <i class="btn btn-danger glyphicon glyphicon-off"></i>
                                <i class="btn btn-info glyphicon glyphicon-repeat"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>