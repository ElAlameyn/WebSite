<?php

namespace application\controllers;

use application\core\Controller;

class TestController extends Controller {
    public function indexAction() {
        $this->view->render('Test');
    }
    
    public function checkAction() {
        $this->view->render('About');
    }
}
