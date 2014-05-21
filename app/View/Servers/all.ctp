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
                <?php

                    $msg = $this->Session->flash('good');
                    if(!empty($msg)) {
                        echo '<div class="alert alert-success">' . $msg . '</div>';
                    }

                ?>

                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('name', 'Name'); ?></th>
                            <th><?php echo $this->Paginator->sort('ip', 'IP'); ?></th>
                            <th><?php echo $this->Paginator->sort('port', 'Port'); ?></th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(count($data) == 0) {
                            echo '<tr><td colspan="5">You have no servers configured yet, <a href="'.$this->Html->url(array('controller' => 'servers', 'action' => 'add')).'">add one here</a></td></tr>';
                        } else {
                            foreach($data as $server) {
                                $server = reset($server);
                                echo '  <tr>
                                            <td><a href="'.$this->Html->url(array('controller' => 'servers', 'server' => $server['id'], 'action' => 'dashboard')).'">'.$server['name'].'</a></td>
                                            <td>'.$server['ip'].'</td>
                                            <td>'.$server['port'].'</td>
                                            <td><span class="label label-success">Online</span></td>
                                            <td>
                                                <i class="btn btn-danger glyphicon glyphicon-off"></i>
                                                <i class="btn btn-info glyphicon glyphicon-repeat"></i>
                                            </td>
                                        </tr>';
                            }
                        }
                    ?>
                    </tbody>
                </table>

                <?php
                    echo $this->Paginator->numbers(array(
                        'before' => '<ul class="pagination">',
                        'separator' => '',
                        'currentClass' => 'active',
                        'tag' => 'li',
                        'after' => '</ul>'
                    ));
                ?>
            </div>
        </div>
    </div>
</div>