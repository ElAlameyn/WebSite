<?php


namespace application\controllers;

use application\core\Controller;
use application\models\GuestBookModel;

class UploadReviewsController extends Controller
{
    function indexAction()
    {
        $this->view->render('UploadReviewsView.php');
    }

    function createAction()
    {
        $model = new GuestBookModel();

        
        if ($_FILES['file']['name'] != "") {
            //debug(file($_FILES['file']['tmp_name']));
            foreach(file($_FILES['file']['tmp_name']) as $file) {
            //    debug($file);
                $model->addReview($file);
            }
             $vars = ['result' => true];
            $this->view->render('UploadReviewsView.php', $vars);
        } else {
            $vars = ['empty' => true];
            $this->view->render('UploadReviewsView.php', $vars);
        }
    }
}
