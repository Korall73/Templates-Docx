<section class="wrapper-templates">
    <div class="wrapper-cart">
        <?php
            if(is_array($templateData) || is_object($templateData))
            {
                foreach($templateData as $row)
                {
                    echo
                    (
                        '<div class="cart">
                            <img src="/img/'. $row['icon_cart'] .'" alt="cart-image">
                            <p class="txt-cart">'. $row['header'] .'</p>
                            <a class="btn-cart" href="/temp/main/'. $row['id'] .'">Открыть шаблон</a>
                        </div>'
                    );
                }

                unset($row);
            }

        ?>
    </div>
</section>
<style>
    <?php include_once 'templates_vkr/css/Templates.css'; ?>
</style>