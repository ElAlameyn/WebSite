<?php

namespace application\controllers;

use application\core\Controller;

class ContactsController extends Controller {
    public function indexAction() {
        $this->view->render('Contacts');
    }
    
    public function checkAction() {
        $this->view->render('About');
    }
}