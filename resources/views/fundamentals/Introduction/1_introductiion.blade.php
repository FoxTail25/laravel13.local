<x-layout-base :title="$title">
    <x-page.theme-header>
        Введение в PHP фреймворк Laravel
    </x-page.theme-header>
    <x-page.page-header>
        Предисловие
    </x-page.page-header>
    <x-page.page-text>
        Laravel представляет собой PHP фреймворк, реализующий подход MVC. В Laravel есть контроллеры, представления и
        модели.
        <br />
        Также этот фреймворк предоставляет удобный роутинг, встроенный шаблонизатор Blade, свою ORM Eloquent для работы
        с базами данных, сессии, куки и flash сообщения, удобное связывание таблиц, валидацию, тестирование и многое
        другое.
        <br />
        Также в Laravel встроен специальный интерфейс командной строки - Artisan. Через него можно создавать классы,
        выполнять миграции, запускать сервер разработки и делать много других полезных вещей.
    </x-page.page-text>
    <x-page.page-header>
        Требования
    </x-page.page-header>
    <x-page.page-text>
        Для установки laravel 13 необходим php 8.3 и выше. Иначе будет уставновлена 12я или более ранняя версия laravel
    </x-page.page-text>
    <x-page.page-header>
        Документация
    </x-page.page-header>
    <x-page.page-text>
        Фреймворк Laravel очень богат возможностями. В данном коспекте по
        <a href="https://code.mu/ru/php/framework/laravel/book/prime/">
            учебнику Дмитрия Трепачёва
        </a> рассмотрены наиболее часто используемые вещи.
        <br />
        Полную информацию по фреймворку можно найдети в
        <a href="https://laravel.su/docs/13.x/documentation">
            русской документации.
        </a>
        Учтите, что перевод может отставать от оригинала, поэтому имейте ввиду, что основной
        источник истины - это
        <a href="https://laravel.com/framework/docs/13.x">
            англоязычная документация
        </a>.
    </x-page.page-text>
</x-layout-base>
