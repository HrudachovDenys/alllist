<?php

class Controller_Api extends Controller
{
    public function action_index()
    {
        header ('Location: error/404');
    }
}