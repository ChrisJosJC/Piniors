<?php

class Dashboard extends Controller
{
    function __construct()
    {
        parent::__construct();
        if(isset($_SESSION["username"])) $this->view->render("dashboard/index",5,"panel/index");
    }
}
