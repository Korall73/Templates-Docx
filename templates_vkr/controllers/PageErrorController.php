<?php

    class PageErrorController extends Controller
    {
        function error404(){
            $this->view->generate('Error404.php', 'tempView.php');
        }
    }

?>