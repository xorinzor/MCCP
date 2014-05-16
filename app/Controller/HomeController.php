<?php

class HomeController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function dashboard() {
        //Add dashboard related function here
        $this->render('/Pages/home');
    }
}