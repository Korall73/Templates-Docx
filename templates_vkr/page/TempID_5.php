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
        <input class="input" type="text" name="region" placeholder="Регион отедал МВД" required>
        <input class="input" type="text" name="zvanie" placeholder="Звание начальника отдела" required>
        <input class="input" type="text" name="name_officer" placeholder="ФИО начальника отдела" required>
        <input class="input" type="text" name="name" placeholder="Ваше ФИО" required>
        <input class="input" type="text" name="adres" placeholder="Место проживания" required>
        <input class="input" type="text" name="work" placeholder="Место работы" required>
        <input class="input" type="tel" name="tel" placeholder="Ваш номер телефона" required>
        <p>Дата преступления</p>
        <input class="input" type="date" name="date_prest" placeholder="Дата преступления" required>
        <input class="input" type="text" name="adres_prest" placeholder="Адрес претсупления" required>
        <input class="input" type="text" name="mobil" placeholder="Марка и модель телефона" required>
        <input class="input" type="number" name="price" placeholder="Стоимость телефона" required>
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