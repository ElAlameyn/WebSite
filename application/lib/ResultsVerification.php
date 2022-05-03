<?php

require 'application/lib/CustomFormValidation.php';

class ResultsVerification extends CustomFormValidation {
    private $result = 0;
    private $answers = [];

    public function ResultsVerification() {
        parent::__construct();
        $this->setAnswer('q2', '20');
        $this->setAnswer('q3', 'Тест' );
    }

    public function checkAns($post_array) {
        foreach ($this->answers as $key => $value) {
            var_dump($post_array[$key]);
            if ($post_array[$key] == $value) {
                $this->result++;
            }
            else{
                var_dump($post_array[$key]);
            }
        }
        if (isset($post_array['checkbox1']) && !isset($post_array['checkbox2']) && isset($post_array['checkbox3'])) {
            $this->result++;
         } 
    }

    public function getResult() {
        var_dump($this->result);
        return $this->result;
    }

    public function setAnswer($field_name, $ans) {
        $this->answers[$field_name] = $ans;
	}
}