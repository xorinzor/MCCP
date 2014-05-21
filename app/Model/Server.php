<?php

App::uses('AppModel', 'Model');

class Server extends AppModel {
    public $validate = array(
        'name' => array(
            'isUnique' => array(
                'rule' => 'isUnique',
                'on' => 'create',
                'message' => 'A server with such name already exists',
                'required' => true,
                'allowEmpty' => false
            ),
            'between' => array(
                'rule' => array('between', 1, 40),
                'message' => 'Please provide a name between 1 and 40 characters for this server',
                'required' => true
            )
        ),
        'ip' => array(
            'ip' => array(
                'rule' => array('ip', 'IPv4'),
                'message' => 'Please enter a valid IP',
                'required' => true,
                'allowEmpty' => false
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('ip', 'port'), false),
                'message' => 'A server with this ip/port combination already exists'
            )
        ),
        'port' => array(
            'range' => array(
                'rule' => array('range', 1, 65535),
                'message' => 'Please enter a port number within the valid port range (1 - 65535)',
                'required' => true,
                'allowEmpty' => false
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('ip', 'port'), false),
                'message' => 'A server with this ip/port combination already exists'
            )
        )
    );

    public function beforeSave($options = array()) {
        return true;
    }

}
