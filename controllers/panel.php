<?php

class Panel extends Controller
{
    function __construct()
    {
        parent::__construct();
        if(isset($_SESSION["username"])) $this->view->render("panel/index");
        else $this->view->render("login/index");
    }
}
