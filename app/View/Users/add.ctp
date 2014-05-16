<?php echo $this->Form->create('User', array('action' => 'add')); ?>
<?php echo $this->Form->input("username", array('label' => 'Username'))   ?>
<?php echo $this->Form->input("password",array("type"=>"password", 'label' => 'password')) ?>
<?php echo $this->Form->submit('Submit'); ?>