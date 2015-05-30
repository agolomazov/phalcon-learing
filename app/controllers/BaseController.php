<?php

class BaseController extends \Phalcon\Mvc\Controller{

    public function initialize(){

        $title = "Тестовое приложение на Phalcon";
        $this->view->setVar('title', $title);

    }

}