<?php

namespace application\models;

use application\core\Model;

class Main extends Model {
    public $photoModel;
    public $interests;

    public function __construct() {
        $this->photoModel = new PhotoModel();
        $this->interests = new InterestsModel();
    }

    
}
