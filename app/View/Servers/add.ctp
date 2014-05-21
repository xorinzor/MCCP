<?php
$this->layout = 'default';
$title_for_layout = 'Add server';
?>

<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Server list'); ?></h3>
            </div>
            <div class="panel-body">
                <fieldset>
                    <legend><?php echo __('Add server'); ?></legend>
                    <p><?php echo __('Please enter the following information of the server you wish to add:'); ?></p>

                    <br />

                    <?php
                        $msg = $this->Session->flash();
                        if(!empty($msg)) {
                            echo '<div class="alert alert-warning">' . $msg . '</div>';
                        }

                        echo $this->Form->create('Server', array(
                            'class' => 'form-horizontal',
                            'inputDefaults' => array(
                                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                                'div' => array('class' => 'form-group'),
                                'label' => array('class' => 'control-label col-xs-3 col-sm-2 col-md-1'),
                                'between' => '<div class="col-xs-9 col-sm-7 col-md-6 col-lg-5">',
                                'after' => '</div>',
                                'error' => array('attributes' => array('wrap' => 'p', 'class' => 'text-danger help-block'))
                            )
                        ));

                        echo $this->Form->input('name', array(
                            'id' => 'name',
                            'type' => 'text',
                            'div' => array('class' => 'form-group ' . (isset($this->validationErrors['Server']['name']) ? "has-error" : "")),
                            'class' => 'form-control',
                            'placeholder' => 'custom name'
                        ));

                        echo $this->Form->input('ip', array(
                            'id' => 'ip',
                            'type' => 'text',
                            'div' => array('class' => 'form-group ' . (isset($this->validationErrors['Server']['ip']) ? "has-error" : "")),
                            'class' => 'form-control',
                            'placeholder' => '127.0.0.1'
                        ));

                        echo $this->Form->input('port', array(
                            'id' => 'port',
                            'type' => 'text',
                            'div' => array('class' => 'form-group ' . (isset($this->validationErrors['Server']['port']) ? "has-error" : "")),
                            'class' => 'form-control',
                            'value' => '25565'
                        ));

                        echo $this->Form->input('Add server', array(
                            'id' => 'submit',
                            'type' => 'submit',
                            'class' => 'btn btn-primary',
                            'between' => '<div class="col-sm-offset-2 col-md-offset-1 col-xs-10 col-md-11">',
                            'label' => false
                        ));

                        echo $this->Form->end();
                    ?>
                </fieldset>
            </div>
        </div>
    </div>
</div>