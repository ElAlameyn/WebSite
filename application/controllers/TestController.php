<?php

namespace application\controllers;

use application\core\Controller;

class TestController extends Controller {
    public function indexAction() {
        $this->view->render('Test');
    }
    
    
    function checkAction() {
		if (!empty($_POST)) {
      if (!isset($_SESSION['isUser'])) {
        $vars = ['exception'=> 403];
        $this->view->render('TestView.php', $vars);
        return;
      }
			$this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();
            var_dump($errors);
			if (empty($errors)) {
                var_dump("dich");
                $this->model->validator->checkAns($_POST);
                $this->model->createTest($_POST);
                $_POST = array();
                $result = $this->model->validator->getResult();
                $vars = [ 'result' => $result ];
			}
			else {
                $vars = [ 'errors' => $errors ];
            }
			$this->view->render('TestView.php', 'Тест', $vars);
		} 
    else {
            $this->view->render('TestView.php', 'Тест');
        }
	}
}
