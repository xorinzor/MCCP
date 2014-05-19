<?php

class ServersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function dashboard() {
        //Add dashboard related function here
        $this->render('/Servers/dashboard');
    }

    public function all() {
        //Add dashboard related function here
        $this->render('/Servers/all');
    }
}