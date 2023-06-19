<section class="wrapper-tempId">
    <div class="example">
        <h1>Шаблон документа</h1>
        <?php
        
            if(is_array($templateData) || is_object($templateData))
            {
                foreach($templateData as $row)
                {
                    echo
                    (
                        '<img src="/img/' . $row['temp_img'] . '" alt="temp-img">
                        <img src="/img/' . $row['temp_img_2'] . '" alt="temp-img">
                        <img src="/img/' . $row['temp_img_3'] . '" alt="temp-img">
                        <img src="/img/' . $row['temp_img_4'] . '" alt="temp-img">
                        <img src="/img/' . $row['temp_img_5'] . '" alt="temp-img">
                        <img src="/img/' . $row['temp_img_6'] . '" alt="temp-img">'
                    );
                }

                unset($row);
            }
            
        
        ?>
    </div>    
    <form class="filling" method="post">
        <input class="input" type="text" name="city" placeholder="Место заключения" required>
        <p>Дата заключения</p>
        <input class="input" type="date" name="date" placeholder="Дата заключения" required>
        <input class="input" type="text" name="principal" placeholder="ООО Принципал" required>
        <input class="input" type="text" name="name_principal" placeholder="ФИО доверенного лица принципала" required>
        <input class="input" type="text" name="footing_principal" placeholder="Основания для доверенного лица" required>
        <input class="input" type="text" name="agent" placeholder="ООО Агента" required>
        <input class="input" type="text" name="name_agent" placeholder="ФИО доверенного лица агента" required>
        <input class="input" type="text" name="footing_agent" placeholder="Основания для доверенного лица" required>
        <input class="input" type="text" name="product" placeholder="Реализуемый товар" required>
        <input class="input" type="text" name="material" placeholder="Товар изготовлен из *материал*" required>
        <input class="input" type="number" name="notification_implementation" placeholder="Уведомление о реализации (дни)" required>
        <input class="input" type="number" name="response_request" placeholder="Ответ на запрос агента (дни)" required>
        <input class="input" type="number" name="term_termination" placeholder="Уведомление о расторжении (дни)" required>
        <input class="input" type="number" name="agent_costs" placeholder="Дней на возмещение расходов Агента" required>
        <input class="input" type="number" name="award" placeholder="% Агента" required>
        <input class="input" type="number" name="term_remuneration" placeholder="Срок выплаты % Агенту" required>
        <input class="input" type="text" name="adres_principal" placeholder="Юр. адрес принципала" required>
        <input class="input" type="number" name="index_principal" placeholder="Индекс принципала" required>
        <input class="input" type="number" name="inn_principal" placeholder="ИНН принципала" required>
        <input class="input" type="number" name="kpp_principal" placeholder="КПП принципала" required>
        <input class="input" type="text" name="bank_principal" placeholder="Банк принципала" required>
        <input class="input" type="number" name="ras_principal" placeholder="Рас/счет принципала" required>
        <input class="input" type="number" name="korr_principal" placeholder="Корр/счет принципала" required>
        <input class="input" type="number" name="bik_principal" placeholder="БИК принципала" required>
        <input class="input" type="text" name="adres_agent" placeholder="Юр. адрес агента" required>
        <input class="input" type="number" name="index_agent" placeholder="Индекс агента" required>
        <input class="input" type="number" name="inn_agent" placeholder="ИНН агента" required>
        <input class="input" type="number" name="kpp_agent" placeholder="КПП агента" required>
        <input class="input" type="text" name="bank_agent" placeholder="Банк агента" required>
        <input class="input" type="number" name="ras_agent" placeholder="Рас/счет агента" required>
        <input class="input" type="number" name="korr_agent" placeholder="Корр/счет агента" required>
        <input class="input" type="number" name="bik_agent" placeholder="БИК агента" required>
        <div>
            <input type="reset" value="Очистить">
            <input type="submit" value="Скачать">
        </div>
    </form>
</section>
<style>
    <?php include_once 'templates_vkr/css/TempID.css'; ?>
</style>