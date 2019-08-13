<?php

    //load configuration and helper functions
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib' . DS .'helpers' . DS . 'functions.php');

    // autoload classes
function core_directory_autoload($className)
{
    $core_className = ROOT . DS . 'core' . DS . $className . '.php';
    if(file_exists($core_className))
    {
        require_once($core_className);
    }
}

function controllers_directory_autoload($className)
{
    $controllers_className = ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php';
    if(file_exists($controllers_className))
    {
        require_once($controllers_className);
    }
}

function models_directory_autoload($className)
{
    $models_className = ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php';
    if(file_exists($models_className))
    {
        require_once($models_className);
    }
}

spl_autoload_register('core_directory_autoload');
spl_autoload_register('controllers_directory_autoload');
spl_autoload_register('models_directory_autoload');

    // Route the request
Router::route($url);