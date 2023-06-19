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
                        '<img src="/img/' . $row['temp_img'] . '" alt="temp-img">'
                    );
                }

                unset($row);
            }
            
        
        ?>
    </div>    
    <form class="filling" method="post">
        <input class="input" type="text" name="whom_post" placeholder="Должность получателя" required>
        <input class="input" type="text" name="whom_name" placeholder="ФИО получателя" required>
        <input class="input" type="text" name="from_name" placeholder="Ваше ФИО" required>
        <input class="input" type="number" name="from_passport_series" placeholder="Серия вашего паспорта" required>
        <input class="input" type="number" name="from_passport_number" placeholder="Номер вашего паспорта" required>
        <input class="input" type="tel" name="from_tel" placeholder="Ваш номер телефона" required>
        <input class="input" type="text" name="name_deceased" placeholder="ФИО умершего" required>
        <p>Дата смерти</p>
        <input class="input" type="date" name="date_deceased" placeholder="" required>
        <p>Дата подачи заявления</p>
        <input class="input" type="date" name="date" placeholder="" required>
        <div>
            <input type="reset" value="Очистить">
            <input type="submit" value="Скачать">
        </div>
    </form>
</section>
<style>
    <?php include_once 'templates_vkr/css/TempID.css'; ?>
</style>