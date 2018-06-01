<?php

class Category extends Controller
{
    public function index()
    {
        $category = $this->model('CategoryModel');
        $categories = $category->categories();
        #echo "<pre>";
        #print_r($category->categories());
        $this->view('category/index', ['categories' => $categories]);
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
