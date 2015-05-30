<?php

class IndexController extends BaseController{


    public function initialize(){

        parent::initialize();
        $this->view->setVar('subtitle', "Шаблон контроллера IndexController");

    }

    public function indexAction(){

        $name = "Anton Golomazov";

        $this->view->setVar('name', $name);
    }


    public function testAction(){

        $this->view->disable();
        header("Content-Type: text/plain");
        echo "Некие данные в формате JSON или XML";


    }


}