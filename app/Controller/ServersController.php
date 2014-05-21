<?php

class ServersController extends AppController {

    public $components = array('Paginator');

    public $paginate = array(
        'fields' => array('Server.id', 'Server.name', 'Server.ip', 'Server.port'),
        'limit' => 10,
        'maxLimit' => 10,
        'order' => array(
            'Server.name' => 'asc'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function dashboard() {
        //Add dashboard related function here
    }

    public function all() {
        //Add server list related function here
        $this->Paginator->settings = $this->paginate;

        $data = $this->Paginator->paginate('Server');
        $this->set('data', $data);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Server->create();
            $this->Server->set($this->request->data);

            //Make sure the data is valid
            if($this->Server->validates()) {
                //Save the information in the database
                if ($this->Server->save()) {
                    $this->Session->setFlash(__('The server has been added'), 'default', array(), 'good');
                    //$this->redirect(array('action' => 'all'));
                    return;
                }
            } else {
                $this->Session->setFlash(__('The server could not be added. Please check the provided information and try again.'));
            }
        }
    }
}