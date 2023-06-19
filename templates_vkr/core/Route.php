<?php

    function my_autoloader_controller($class_name) {
            
        $controllerPath = './templates_vkr/controllers/' . $class_name . '.php';
        $modelPath = './templates_vkr/model/' . $class_name . '.php';

        if (file_exists($controllerPath)) {
            include_once $controllerPath;
        }

        if (file_exists($modelPath)) {
            include_once $modelPath;
        }
    }

    spl_autoload_register('my_autoloader_controller');

    class Route
    {
        static function loadPage(){
            $uri = explode('/', $_SERVER['REQUEST_URI']);

            $controllerName = ucfirst(!empty($uri[1]) ? $controllerName = $uri[1] : 'index');
            $actionName = ucfirst(!empty($uri[2]) ? $actionName = $uri[2] : 'main');
            $templateId = ucfirst(!empty($uri[3]) ? $templateId = $uri[3] : null);

            $modelName = $controllerName;

            $controllerName .= 'Controller';
            $modelName .= 'Model';

            if(class_exists($controllerName)){
                $controller = new $controllerName;
                $action = $actionName;

                if(method_exists($controller, $action)){
                    if($templateId != null){
                        require_once 'templates_vkr/form/TempID_' . $templateId . '.php';
                    }
                    $controller->$action($templateId);
                }else{
                    $controller = new PageErrorController;
                    $action = 'error404';
                    $controller->$action();
                }
            }else{
                $controller = new PageErrorController;
                $action = 'error404';
                $controller->$action();
            }
        }
    }

?>