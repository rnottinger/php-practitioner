<?php

class User
{
    protected $first_name;
    protected $last_name;

    public function __construct(){
        
    }

    public function fullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

}