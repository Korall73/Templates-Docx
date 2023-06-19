<?php

    class IndexController extends Controller
    {
        function Main($templateId = null)
        {
            $this->view->generate('Main.php', 'tempView.php');
        }
    }

?>