<?php

    if(!empty($_POST))
    {
        require_once 'vendor/autoload.php';
        
        $city = $_POST['city'];
        $date = $_POST['date'];
        $principal = $_POST['principal'];
        $name_principal = $_POST['name_principal'];
        $footing_principal = $_POST['footing_principal'];
        $agent = $_POST['agent'];
        $name_agent = $_POST['name_agent'];
        $footing_agent = $_POST['footing_agent'];
        $product = $_POST['product'];
        $material = $_POST['material'];
        $notification_implementation = $_POST['notification_implementation'];
        $response_request = $_POST['response_request'];
        $term_termination = $_POST['term_termination'];
        $agent_costs = $_POST['agent_costs'];
        $award = $_POST['award'];
        $term_remuneration = $_POST['term_remuneration'];
        $adres_principal = $_POST['adres_principal'];
        $index_principal = $_POST['index_principal'];
        $inn_principal = $_POST['inn_principal'];
        $kpp_principal = $_POST['kpp_principal'];
        $bank_principal = $_POST['bank_principal'];
        $ras_principal = $_POST['ras_principal'];
        $korr_principal = $_POST['korr_principal'];
        $bik_principal = $_POST['bik_principal'];
        $adres_agent = $_POST['adres_agent'];
        $index_agent = $_POST['index_agent'];
        $inn_agent = $_POST['inn_agent'];
        $kpp_agent = $_POST['kpp_agent'];
        $bank_agent = $_POST['bank_agent'];
        $ras_agent = $_POST['ras_agent'];
        $korr_agent = $_POST['korr_agent'];
        $bik_agent = $_POST['bik_agent'];
        $tempZayav = './templates_vkr/form/templates_docx/D_agent.docx';
        $tempFile = './templates_vkr/form/templates_docx/document.docx';

        $templateProccesor = new \PhpOffice\PhpWord\TemplateProcessor($tempZayav);
        $templateProccesor->setValue('city', $city);
        $templateProccesor->setValue('date', $date);
        $templateProccesor->setValue('principal', $principal);
        $templateProccesor->setValue('name_principal', $name_principal);
        $templateProccesor->setValue('footing_principal', $footing_principal);
        $templateProccesor->setValue('agent', $agent);
        $templateProccesor->setValue('name_agent', $name_agent);
        $templateProccesor->setValue('footing_agent', $footing_agent);
        $templateProccesor->setValue('product', $product);
        $templateProccesor->setValue('material', $material);
        $templateProccesor->setValue('notification_implementation', $notification_implementation);
        $templateProccesor->setValue('response_request', $response_request);
        $templateProccesor->setValue('term_termination', $term_termination);
        $templateProccesor->setValue('agent_costs', $agent_costs);
        $templateProccesor->setValue('award', $award);
        $templateProccesor->setValue('term_remuneration', $term_remuneration);
        $templateProccesor->setValue('adres_principal', $adres_principal);
        $templateProccesor->setValue('index_principal', $index_principal);
        $templateProccesor->setValue('inn_principal', $inn_principal);
        $templateProccesor->setValue('kpp_principal', $kpp_principal);
        $templateProccesor->setValue('bank_principal', $bank_principal);
        $templateProccesor->setValue('ras_principal', $ras_principal);
        $templateProccesor->setValue('korr_principal', $korr_principal);
        $templateProccesor->setValue('bik_principal', $bik_principal);
        $templateProccesor->setValue('adres_agent', $adres_agent);
        $templateProccesor->setValue('index_agent', $index_agent);
        $templateProccesor->setValue('inn_agent', $inn_agent);
        $templateProccesor->setValue('kpp_agent', $kpp_agent);
        $templateProccesor->setValue('bank_agent', $bank_agent);
        $templateProccesor->setValue('ras_agent', $ras_agent);
        $templateProccesor->setValue('korr_agent', $korr_agent);
        $templateProccesor->setValue('bik_agent', $bik_agent);
        $templateProccesor->saveAs($tempFile);

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=agentsky_dogovor.docx');
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