<?php

class register extends Controller
{
    public function index()
    {
        $register = $this->model('RegisterModel'); 
        $registers = $register->registers();
        $this->view('register/add',['registers' => $registers]);
        #echo "<pre>";
        #print_r($register->registers());
    }

    public function template($view = '', $param = 0)
    {
        switch ($view) {
            case 'add':
                $this->view('register/'.$view);
                break;
            default:
                $this->view('register/error');
                break;
        }
    }

    public function add($name = '', $ci = '',$day = '',$hour = '')
    {
        
        $name = $_POST['name'];
        $ci = $_POST['ci'];
        $day = $_POST['day'];
        $hour = $_POST['hour'];

        if (!empty($name)) {
            $register = $this->model('RegisterModel'); 
            $register->name = $name;
            $register->ci = $ci;
            $register->day = $day;
            $register->hour = $hour;
            if ($register->add()) {
                header('Location: http://localhost/sis2-xp/src/public/register');
                echo "registrado";
                #$this->view('register/add');
                exit;
            }
        } else {
            $this->view('register/error');
        }
    }

}