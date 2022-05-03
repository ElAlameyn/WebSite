<?php

class CustomFormValidation extends FormValidation {
    public function CustomFormValidation() {
        $this->setRule('q2', 'isNotEmptySelect');
        $this->setRule('q3', 'isNotEmpty'); 
        $this->setRule('q3', 'isInteger');
    }
}