<?php

class register extends Controller
{
    public function index()
    {
        $register = $this->model('RegisterModel'); 
        $registers = $register->registers();
        $this->view('register/index',['registers' => $registers]);
        echo "<pre>";
        print_r($register->registers());
    }
}