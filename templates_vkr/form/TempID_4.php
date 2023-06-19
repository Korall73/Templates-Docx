<?php

    if(!empty($_POST))
    {
        require_once 'vendor/autoload.php';
        
        $whom_post = $_POST['whom_post'];
        $whom_name = $_POST['whom_name'];
        $from_name = $_POST['from_name'];
        $from_passport_series = $_POST['from_passport_series'];
        $from_passport_number = $_POST['from_passport_number'];
        $from_tel = $_POST['from_tel'];
        $name_deceased = $_POST['name_deceased'];
        $date_deceased = $_POST['date_deceased'];
        $date = $_POST['date'];
        $tempZayav = './templates_vkr/form/templates_docx/Zayv_doly.docx';
        $tempFile = './templates_vkr/form/templates_docx/document.docx';

        $templateProccesor = new \PhpOffice\PhpWord\TemplateProcessor($tempZayav);
        $templateProccesor->setValue('whom_post', $whom_post);
        $templateProccesor->setValue('whom_name', $whom_name);
        $templateProccesor->setValue('from_name', $from_name);
        $templateProccesor->setValue('from_passport_series', $from_passport_series);
        $templateProccesor->setValue('from_passport_number', $from_passport_number);
        $templateProccesor->setValue('from_tel', $from_tel);
        $templateProccesor->setValue('name_deceased', $name_deceased);
        $templateProccesor->setValue('date_deceased', $date_deceased);
        $templateProccesor->setValue('date', $date);
        $templateProccesor->saveAs($tempFile);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=Zayv_doly.docx');
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