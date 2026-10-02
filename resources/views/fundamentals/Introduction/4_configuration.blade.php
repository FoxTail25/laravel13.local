<x-layout-base :title="$title">
    <x-page.theme-header>
        Введение в PHP фреймворк Laravel
    </x-page.theme-header>

    <x-page.page-header>
        Конфигурирование Laravel
    </x-page.page-header>

    <x-page.page-text>
        Основные настройки Laravel хранятся в файле
        <x-page.page-code>
            .env
        </x-page.page-code>
        в корне проекта. Значения из него подхватывают файлы из папки
        <x-page.page-code>
            config/.
        </x-page.page-code>
        <br />
        Откроем
        <x-page.page-code>
            .env
        </x-page.page-code>
        . Там можно увидеть имя приложения, окружение, режим отладки, URL сайта и другие параметры:
        <x-page.page-code>
            <br />
            APP_NAME=Laravel
            <br />
            APP_ENV=local
            <br />
            APP_DEBUG=true
            <br />
            APP_URL=http://localhost
            <br />
        </x-page.page-code>
        Настройка APP_DEBUG включает режим отладки. При
        <x-page.page-code>
            true
        </x-page.page-code>
        Laravel подробно показывает ошибки в браузере. На боевом сайте, значение доложно быть
        <x-page.page-code>
            false
        </x-page.page-code>
        .
        <br />
        Настройка
        <x-page.page-code>
            APP_ENV
        </x-page.page-code>
        задаёт окружение: обычно
        <x-page.page-code>
            local
        </x-page.page-code>
        для разработки и
        <x-page.page-code>
            production
        </x-page.page-code>
        для боевого сервера.
        <br />
        В файлах папки
        <x-page.page-code>
            config/
        </x-page.page-code>
        значения читают через функцию
        <x-page.page-code>
            .env
        </x-page.page-code>
        . Первым параметром передают имя перемнной, вторым - значение по умолчанию, если переменной нет:
        <x-page.page-code>
            'debug' => (bool) env('APP_DEBUG', false),
        </x-page.page-code>
        <br />
        Из кода приложения настройки лучше читать через функцию
        <x-page.page-code>
            config
        </x-page.page-code>
        , а не через
        <x-page.page-code>
            env
        </x-page.page-code>
        напрямую:
        <br />
        <x-page.page-code>
            $value = config('app.name');
        </x-page.page-code>
        Режим обслуживания влключат командой
        <x-page.page-code>
            php artisan down
        </x-page.page-code>
        Пока он включен, сайт отвечает кодом 503. Выключают командой
        <x-page.page-code>
            php artisan up
        </x-page.page-code>
    </x-page.page-text>
</x-layout-base>
