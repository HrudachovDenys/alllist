<?php

class Controller_Error extends Controller
{
    public function action_index()
    {
        header("HTTP/1.1 404 Not found");
        header('Location: error'.DS.'404');
    }
    public function action_404()
    {
        $view = new View('error404', 'main');
        $view->render();
    }
    
}