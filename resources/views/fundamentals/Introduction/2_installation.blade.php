<x-layout-base :title="$title">


    <x-page.theme-header>
        Введение в PHP фреймворк Laravel
    </x-page.theme-header>

    <x-page.page-header>
        Подготовка
    </x-page.page-header>

    <x-page.page-text>
        Для начала, желательно убедится что у вас стоит php 8.3 или более поздняя версия. Для этого
        достаточно в терминале набрать команду <x-page.page-code>php -v</x-page.page-code>
        После этого отобразится версия php.<br />
        Так же желательно проверить содержимое файла php.ini. Он находится в папке с языком php обычно это C:/php
        строки extension=pdo_sqlite и extension=sqlite3 должны быть раскоментированы. Т.е. перед ними не должно быть ;
        (точки с запятой). Так же желательно что бы были раскоментирваны следующие строки: extension=curl,
        extension=fileinfo, extension=mbstring, extension=openssl, extension=pdo_mysql
    </x-page.page-text>

    <x-page.page-header>
        Установка
    </x-page.page-header>

    <x-page.page-text>
        Рекомендуется устанавливать фреймворк через Composer.
        <br />
        Если всё в порядке, то заходим в свой редактор кода (я использую Visual Studio Code), выбираем папку, в которой
        будет установлена директория с фреймворком. И пишем в терминале команду
        <x-page.page-code>composer create-project laravel/laravel laravel.local</x-page.page-code>
        (laravel.local — это имя папки, которую Composer создаст в вашей текущей директории и куда скачает весь проект.)
    </x-page.page-text>

    <x-page.page-text>
        Когда установка будет успешно завершена, вам нужно будет запустить фреймворк. Для этого в терминале
        перейдите в папку с установленным фреймворком: <x-page.page-code>cd laravel.local</x-page.page-code>
        После этого выполните следующую команду <x-page.page-code>php artisan serve</x-page.page-code>
        В результате (если всё нормально) фреймворк будет запущен на определенном ip и порту. В терминале вы увидите
        ссылку (обычно http://127.0.0.1:8000/). Перейдите по ней (зажав кнопку ctrl + клик левой кнопкой
        мыши) и в браузере откроется главная страница нашего сайта. Это значит, что все работает. Запускать
        фреймворк через Artisan нужно будет каждый раз перед началом работы. Поэтому запомните или запишите
        нужную команду.
    </x-page.page-text>
</x-layout-base>
