<x-layout-base :title="$title">
    <x-page.theme-header>
        Введение в PHP фреймворк Laravel
    </x-page.theme-header>

    <x-page.page-header>
        Подключение MySQL в Laravel
    </x-page.page-header>

    <x-page.page-text>
        Если вы хотите использовать MySQL вместо SQLite, сначала создайте базу данных
        через PMA, азатем пропишите доступы в <code>.env</code>:
        <br />
        <code>
            DB_CONNECTION=mysql
            <br />
            DB_HOST=127.0.0.1
            <br />
            DB_PORT=3306
            <br />
            DB_DATABASE=laravel
            <br />
            DB_USERNAME=root
            <br />
            DB_PASSWORD=
            <br />
        </code>
        Значение DB_DATABASE должно совпадать с именем базы, которую вы создали в PMA. Логин и пароль - те, что
        используются для входа в MySQL.
        <br />
        После смены базы данных, примините миграции:
        <br />
        <code>php artisan migrate</code>
        <br />
        Команда создаст таблицы в вашей MySQL-базе. Проверить результат можно через PMA
    </x-page.page-text>

    <x-page.page-header>
        Подключение MariaDB в Laravel
    </x-page.page-header>

    <x-page.page-text>
        MariaDB - это форк MySQL. Она похожа на MySQL и часто используется как замена ей.
        Подключение в Laravel устроенотак же: сначала создайте базу через PMA, а затем
        пропишите доступы в <code>.env</code>
        <br />
        <code>
            DB_CONNECTION=mariadb
            <br />
            DB_HOST=127.0.0.1
            <br />
            DB_PORT=3306
            <br />
            DB_DATABASE=laravel
            <br />
            DB_USERNAME=root
            <br />
            DB_PASSWORD=
            <br />
        </code>
        <br />
        Обратите внимание на строку DB_CONNECTION: для MariaDB значение mariadb, а не mysql. Остальные параметры те же:
        имя базы, хост, логин и пароль.
        <br />
        После смены движка примените миграции:
        <br />
        <code>php artisan migrate</code>
        <br />
        Команда создаст таблицы в вашей MariaDB-базе. Проверить результат можно через PMA.
    </x-page.page-text>

    <x-page.page-header>
        Подключение PostgreSQL в Laravel
    </x-page.page-header>

    <x-page.page-text>
        Laravel также поддерживает PostgreSQL. Сначала создайте базу данных на сервер PostgreSQL, а затем пропишите
        достурпы в <code>.env</code>
        <br />
        <code>
            DB_CONNECTION=pgsql
            <br />
            DB_HOST=127.0.0.1
            <br />
            DB_PORT=5432
            <br />
            DB_DATABASE=laravel
            <br />
            DB_USERNAME=postgres
            <br />
            DB_PASSWORD=
            <br />
        </code>
        <br />
        Значение DB_CONNECTION для PostgreSQL - pgsql. Порт по умолчанию - 5432. Имя базы, логин и пароль должны
        совпадать с тем, что вы создали на сервере PostgreSQL.
        <br />
        После смены движка примените миграции:
        <br />
        <code>php artisan migrate</code>
        <br />
        Через PMA PostgreSQL тоже не посмотреть - PMA работает только с MySQL и MariaDB. Для PostgreSQL
        используют другие инструменты: pgAdmin, DBeaver, TablePlus или команду psql в терминале.
    </x-page.page-text>

</x-layout-base>
