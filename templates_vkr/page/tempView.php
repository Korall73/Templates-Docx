<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/shortcut.png" type="image/x-icon">
    <link rel="icon" href="/img/shortcut.png" type="image/x-icon">
    <title>ВКР</title>
</head>
<body id="body">
    <nav class="wrapper-nav">
        <ul>
            <a class="txt-nav" href="/"><li>Главная</li></a>
            <a class="txt-nav" href="/temp"><li>Шаблоны</li></a>
        </ul>
    </nav>
    <main>
        <?php include_once 'templates_vkr/page/'.$mainView; ?>
    </main>
    <footer class="wrapper-footer">
        <div class="wrapper-contacts">
            <p class="h1-footer">Контакты</p>
            <div class="con">
                <a class="txt-footer" href="tel:+79998887766">+79998887766</a>
                <a class="txt-footer" href="mailto:example@mail.ru">example@mail.ru</a>
            </div>
            <a href="https://vk.com/korall73" target="_blanc"><img class="vk-footer" src="/img/vk.png" alt="vk"></a>
        </div>
        <a class="txt-footer" href="/#body">Layouts Docx, 2023</a>
    </footer>
</body>
<style>
    <?php include_once 'templates_vkr/css/tempView.css'; ?>
</style>
</html>