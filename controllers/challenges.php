<?php

class Challenges extends Controller
{
    function __construct()
    {
        parent::__construct();
        if(isset($_SESSION["username"])) $this->view->render("challenges/index");
        else $this->view->render("login/index");
    }

    public function token($token)
    {
        
    }
}
