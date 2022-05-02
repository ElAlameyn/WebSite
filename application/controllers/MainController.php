<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {
    public function indexAction() {
        $this->view->render('Main page');
    }
    
    public function aboutAction() {
        $this->view->render('About');
    }

    public function contactsAction() {
        $this->view->render('Contacts');
    }

    public function hobbiesAction() {
        $this->view->render('Hobbies');
    }

    public function photoAlbumAction() {
        $photos = [];
        for ($i = 1; $i <= 10; $i++) {
            $photos["Img_".$i] = "http://dummyimage.com/200";
        }

       $vars = [
           'photos' => $photos
       ];

        $this->view->render('Photo Album', $vars);
    }

    public function storyAction() {
        $this->view->render('Story');
    }

    public function studiesAction() {
        $this->view->render('Studies');
    }

    public function testAction() {
        $this->view->render('Test');
    }

}