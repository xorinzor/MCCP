<?php
$this->layout = 'login';
$title_for_layout = 'Login';
?>

<div class="container">
    <?php
        $msg = $this->Session->flash('auth');
        if(!empty($msg)) {
            echo '<div class="alert alert-warning">' . $msg . '</div>';
        }

        $msg = $this->Session->flash();
        if(!empty($msg)) {
            echo '<div class="alert alert-warning">' . $msg . '</div>';
        }
    ?>

    <div id="login-wrapper">
        <?php echo $this->Form->create('User', array(
            'class' => 'form login-form'
        )); ?>
            <legend>Sign in to <span class="blue">MCCP</span></legend>

            <div class="body">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?php
                        echo $this->Form->input('username', array(
                            'id' => 'username',
                            'type' => 'text',
                            'class' => 'form-control',
                            'placeholder' => __('username'),
                            'label' => false
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <?php
                            echo $this->Form->input('password', array(
                                'id' => 'password',
                                'type' => 'password',
                                'class' => 'form-control',
                                'placeholder' => __('password'),
                                'label' => false
                            ));
                        ?>
                    </div>
                </div>
            </div>

            <div class="footer">
                <button type="submit" class="btn btn-success"><?php echo __('Login'); ?></button>
            </div>

        <?php echo $this->Form->end(); ?>
    </div>
</div>
