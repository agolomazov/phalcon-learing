<?php

try {

    // Регистрация автозагрузчика
    $loader = new \Phalcon\Loader();

    // установка папки с контроллерами и моделями
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();

    // Создание контейнера сервисов приложения
    $di = new Phalcon\DI\FactoryDefault();

    // Инициализируем настройки представлений
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });

    // Обработчик запросов
    $application = new \Phalcon\Mvc\Application($di);

    // вызов обработчика
    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}