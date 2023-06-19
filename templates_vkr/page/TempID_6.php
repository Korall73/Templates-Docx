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
        <input class="input" type="text" name="name" placeholder="Ваше ФИО" required>
        <input class="input" type="number" name="number_polic" placeholder="Номер полиса" required>
        <p>Дата заключения полиса</p>
        <input class="input" type="date" name="date_polic" placeholder="Дата заключения полиса" required>
        <p>Дата страхового случая</p>
        <input class="input" type="date" name="date_ss" placeholder="Дата страхового случая" required>
        <input class="input" type="text" name="ss" placeholder="Что произошло?" required>
        <p>Какого числа оповестили органы</p>
        <input class="input" type="date" name="date_opoveh" placeholder="Какого числа оповестили органы" required>
        <input class="input" type="text" name="mesto" placeholder="Наименование органа обращения" required>
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