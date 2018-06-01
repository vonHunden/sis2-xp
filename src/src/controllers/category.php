<?php

class Category extends Controller
{
    public function index()
    {
        $room = $this->model('CategoryModel');
        #$this->view('room/index');
        $rooms = $room->rooms();
        #echo "<pre>";
        #print_r($room->rooms());
        $this->view('category/index', ['rooms' => $rooms]);
    }

    public function template($view = '', $param = 0)
    {
        /*switch ($view) {
            case 'add':
                $this->view('room/'.$view);
                break;
            case 'edit':
                $cat = $this->edit($param);
                $this->view(
                    'room/'.$view,
                    ['room' => []]
                );
                break;
            default:
                $this->view('room/error');
                break;
        }*/
    }

}
