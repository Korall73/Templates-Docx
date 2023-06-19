<?php

    class TempController extends Controller
    {
        function __construct()
        {
            $this->model = new TempModel;
            $this->view = new View;
        }

        function Main($templateId = null)
        {

            if($templateId != null){
                $templateIdFile = 'TempID_' . $templateId . '.php';

                if(file_exists('templates_vkr/page/' . $templateIdFile)){
                    $tempPage = $templateIdFile;
                    $templateData = $this->model->getData($templateId);
                }else{
                    $controller = new PageErrorController;
                    $action = 'error404';
                    $controller->$action();
                }
            }else{
                $templateData = $this->model->getData();
                $tempPage = 'Templates.php';
            }

            $this->view->generate($tempPage, 'tempView.php', $templateData);
        }
    }

?>