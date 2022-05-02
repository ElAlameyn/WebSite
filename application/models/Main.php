<?php

namespace application\models;

use application\core\Model;

class Main extends Model {
    public $photoModel;

    public function __construct() {
        $this->photoModel = new PhotoModel();
    }

    
}
