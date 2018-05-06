<?php

class Controller_Categories extends Controller
{
    public function action_index()
    {
        header("HTTP/1.1 404 Not found");
        header('Location: error'.DS.'404');
    }
    public function action_theProperty()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_transport()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_job()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_electronics()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_repairs()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_interior()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_garden()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_clothes()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_childensGoods()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_animals()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_beauty()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_hobby()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_business()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_food()
    {
        $view = new View('main', 'main');
        $view->render();
    }
    public function action_datingService()
    {
        $view = new View('main', 'main');
        $view->render();
    }
}