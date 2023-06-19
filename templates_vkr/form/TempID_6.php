<?php

    if(!empty($_POST))
    {
        require_once 'vendor/autoload.php';
        
        $name = $_POST['name'];
        $number_polic = $_POST['number_polic'];
        $date_polic = $_POST['date_polic'];
        $date_ss = $_POST['date_ss'];
        $ss = $_POST['ss'];
        $date_opoveh = $_POST['date_opoveh'];
        $mesto = $_POST['mesto'];
        $date = $_POST['date'];
        $tempZayav = './templates_vkr/form/templates_docx/Zayv_ss.docx';
        $tempFile = './templates_vkr/form/templates_docx/document.docx';

        $templateProccesor = new \PhpOffice\PhpWord\TemplateProcessor($tempZayav);
        $templateProccesor->setValue('name', $name);
        $templateProccesor->setValue('number_polic', $number_polic);
        $templateProccesor->setValue('date_polic', $date_polic);
        $templateProccesor->setValue('date_ss', $date_ss);
        $templateProccesor->setValue('ss', $ss);
        $templateProccesor->setValue('date_opoveh', $date_opoveh);
        $templateProccesor->setValue('mesto', $mesto);
        $templateProccesor->setValue('date', $date);
        $templateProccesor->saveAs($tempFile);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=Zayv_ss.docx');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        header('Expires: 0');
        header('Content-Length: ' . filesize($tempFile));
        header('Content-Encoding: utf-8');
        ob_clean();
        flush();
        readfile($tempFile);

        unlink($tempFile);
        exit;
    }

?>