<?php

class Quiz extends Controller
{
    function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION["username"])) $this->view->render("login/index");
        else if(empty($this->url[1])) $this->home();
    }
    function home()
    {
        $this->view->render("quiz/index");
    }
    function jugar()
    {
        $this->view->render("quiz/jugar");
    }
    function final()
    {
        $this->view->render("quiz/final");
    }
}