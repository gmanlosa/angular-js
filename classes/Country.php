<?php
class Country{

    public $name;
    public $code;
    public $states;

    public function _construct($name = '',$code = '', $states = array()){
        $this->name = $name;
        $this->code = $code;
        $this->states = $states;
    }
}