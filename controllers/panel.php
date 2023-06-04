<?php

class Panel extends Controller
{
    function __construct()
    {
        parent::__construct();
        ob_start();
        if(isset($_SESSION["username"])) $this->view->render("panel/index");
        else $this->view->render("login/index",2);
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


