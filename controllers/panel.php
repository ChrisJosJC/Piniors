<?php

class Panel extends Controller
{
    function __construct()
    {
        parent::__construct();
        ob_start();
        $this->view->render("panel/index",2);
    }
    
    function settings(){
        ob_get_clean();
        $this->view->render("panel/settings",2);
    }
    function users(){
        ob_get_clean();
        $this->view->render("panel/users",2);
    }
    function topusers(){
        ob_get_clean();
        $this->view->render("panel/topusers",2);
    }
    function datausers(){
        ob_get_clean();
        $stat = $this->model->getAllUsers();
        echo json_encode($stat);
    }
    function datauserstop(){
        ob_get_clean();
        $stat = $this->model->getAllTopUsers();
        echo json_encode($stat);
    }
    function vars($id=1){
        ob_get_clean();
        $stat = $this->model->getStadistic($id);
        echo json_encode($stat);
    }
    function visits(){
        ob_get_clean();
        $stat = $this->model->getVisits();
        echo json_encode($stat);
    }

}


