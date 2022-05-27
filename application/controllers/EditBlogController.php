<?php

namespace application\controllers;

use application\core\Controller;

class EditBlogController extends Controller
{

    function indexAction()
    {
        $result = $this->model->editBlockModel->getPosts($_GET);
        $vars = [
            'posts' => $result['posts'],
            'current_page' => $result['current_page'],
            'total_pages' => $result['total_pages']
        ];
        $this->view->render('AdminEditBlogView.php', $vars);
    }

    function addAction()
    {
        if (!empty($_POST)) {
            $this->model->validator->validate($_POST);
            $errors = $this->model->validator->getErrors();

            if (empty($errors)) {
                $this->model->editBlockModel->addPost($_POST, $_FILES);
                $_POST = array();
            }

            $result = $this->model->editBlockModel->getPosts($_GET);
            $vars = [
                'posts' => $result['posts'],
                'errors' => $errors,
                'current_page' => $result['current_page'],
                'total_pages' => $result['total_pages']
            ];

            $this->view->render('AdminEditBlogView.php', $vars);
        } else {
            $this->view->render('AdminEditBlogView.php');
        }
    }
}
