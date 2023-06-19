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
                        <img src="/img/' . $row['temp_img_2'] . '" alt="temp-img">'
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
        <input class="input" type="text" name="seller_name" placeholder="ФИО продавца" required>
        <input class="input" type="number" name="seller_passport_series" placeholder="Серия паспорта продавца" required>
        <input class="input" type="number" name="seller_passport_number" placeholder="Номер паспорта продавца" required>
        <input class="input" type="text" name="seller_passport_issued" placeholder="Кем выдан паспорт продавца" required>
        <input class="input" type="text" name="seller_place_residence" placeholder="Где проживает продавец" required>
        <input class="input" type="text" name="buyer_name" placeholder="ФИО покупателя" required>
        <input class="input" type="number" name="buyer_passport_series" placeholder="Серия паспорта покупателя" required>
        <input class="input" type="number" name="buyer_passport_number" placeholder="Номер паспорта покупателя" required>
        <input class="input" type="text" name="buyer_passport_issued" placeholder="Кем выдан паспорт покупателя" required>
        <input class="input" type="text" name="buyer_place_residence" placeholder="Где проживает покупателя" required>
        <input class="input" type="number" name="garage_area" placeholder="Площадь гаража кв. м." required>
        <input class="input" type="text" name="name_gsk" placeholder="Название ГСК" required>
        <input class="input" type="text" name="adres_gsk" placeholder="Адрес ГСК" required>
        <input class="input" type="number" name="number_garage" placeholder="Номер гаража" required>
        <input class="input" type="text" name="ownership" placeholder="Основания на право собственности у продавца" required>
        <p>Дата регистрации в ЕГРН</p>
        <input class="input" type="date" name="date_egr" placeholder="Дата регистрации в ЕГРН" required>
        <input class="input" type="number" name="number_egr" placeholder="Номер записи в ЕГРН" required>
        <input class="input" type="number" name="garage_price" placeholder="Стоимость покупки/продажи" required>
        <div>
            <input type="reset" value="Очистить">
            <input type="submit" value="Скачать">
        </div>
    </form>
</section>
<style>
    <?php include_once 'templates_vkr/css/TempID.css'; ?>
</style>