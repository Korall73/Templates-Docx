<?php

    class View
    {
        function generate($mainView, $tempView, $templateData = null)
        {
            include_once './templates_vkr/page/'.$tempView;
        }
    }

?>