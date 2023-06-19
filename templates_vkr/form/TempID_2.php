<?php

    if(!empty($_POST))
    {
        require_once 'vendor/autoload.php';
        
        $city = $_POST['city'];
        $date = $_POST['date'];
        $seller_name = $_POST['seller_name'];
        $seller_passport_series = $_POST['seller_passport_series'];
        $seller_passport_number = $_POST['seller_passport_number'];
        $seller_passport_issued = $_POST['seller_passport_issued'];
        $seller_place_residence = $_POST['seller_place_residence'];
        $buyer_name = $_POST['buyer_name'];
        $buyer_passport_series = $_POST['buyer_passport_series'];
        $buyer_passport_number = $_POST['buyer_passport_number'];
        $buyer_passport_issued = $_POST['buyer_passport_issued'];
        $buyer_place_residence = $_POST['buyer_place_residence'];
        $garage_area = $_POST['garage_area'];
        $name_gsk = $_POST['name_gsk'];
        $adres_gsk = $_POST['adres_gsk'];
        $number_garage = $_POST['number_garage'];
        $ownership = $_POST['ownership'];
        $date_egr = $_POST['date_egr'];
        $number_egr = $_POST['number_egr'];
        $garage_price = $_POST['garage_price'];
        $tempZayav = './templates_vkr/form/templates_docx/DKP_garaj.docx';
        $tempFile = './templates_vkr/form/templates_docx/document.docx';

        $templateProccesor = new \PhpOffice\PhpWord\TemplateProcessor($tempZayav);
        $templateProccesor->setValue('city', $city);
        $templateProccesor->setValue('date', $date);
        $templateProccesor->setValue('seller_name', $seller_name);
        $templateProccesor->setValue('seller_passport_series', $seller_passport_series);
        $templateProccesor->setValue('seller_passport_number', $seller_passport_number);
        $templateProccesor->setValue('seller_passport_issued', $seller_passport_issued);
        $templateProccesor->setValue('seller_place_residence', $seller_place_residence);
        $templateProccesor->setValue('buyer_name', $buyer_name);
        $templateProccesor->setValue('buyer_passport_series', $buyer_passport_series);
        $templateProccesor->setValue('buyer_passport_number', $buyer_passport_number);
        $templateProccesor->setValue('buyer_passport_issued', $buyer_passport_issued);
        $templateProccesor->setValue('buyer_place_residence', $buyer_place_residence);
        $templateProccesor->setValue('garage_area', $garage_area);
        $templateProccesor->setValue('name_gsk', $name_gsk);
        $templateProccesor->setValue('adres_gsk', $adres_gsk);
        $templateProccesor->setValue('number_garage', $number_garage);
        $templateProccesor->setValue('ownership', $ownership);
        $templateProccesor->setValue('date_egr', $date_egr);
        $templateProccesor->setValue('number_egr', $number_egr);
        $templateProccesor->setValue('garage_price', $garage_price);
        $templateProccesor->saveAs($tempFile);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=dkp.docx');
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