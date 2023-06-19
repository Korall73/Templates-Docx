<?php

    if(!empty($_POST))
    {
        require_once 'vendor/autoload.php';
        
        $region = $_POST['region'];
        $zvanie = $_POST['zvanie'];
        $name_officer = $_POST['name_officer'];
        $name = $_POST['name'];
        $adres = $_POST['adres'];
        $work = $_POST['work'];
        $tel = $_POST['tel'];
        $date_prest = $_POST['date_prest'];
        $adres_prest = $_POST['adres_prest'];
        $mobil = $_POST['mobil'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $tempZayav = './templates_vkr/form/templates_docx/Zayv_policy.docx';
        $tempFile = './templates_vkr/form/templates_docx/document.docx';

        $templateProccesor = new \PhpOffice\PhpWord\TemplateProcessor($tempZayav);
        $templateProccesor->setValue('region', $region);
        $templateProccesor->setValue('zvanie', $zvanie);
        $templateProccesor->setValue('name_officer', $name_officer);
        $templateProccesor->setValue('name', $name);
        $templateProccesor->setValue('adres', $adres);
        $templateProccesor->setValue('work', $work);
        $templateProccesor->setValue('tel', $tel);
        $templateProccesor->setValue('date_prest', $date_prest);
        $templateProccesor->setValue('adres_prest', $adres_prest);
        $templateProccesor->setValue('mobil', $mobil);
        $templateProccesor->setValue('price', $price);
        $templateProccesor->setValue('date', $date);
        $templateProccesor->saveAs($tempFile);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=Zayv_policy.docx');
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