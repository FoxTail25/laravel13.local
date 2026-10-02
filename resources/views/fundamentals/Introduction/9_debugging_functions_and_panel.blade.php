<x-layout-base :title="$title">
    <x-page.theme-header>
        Введение в PHP фреймворк Laravel
    </x-page.theme-header>

    <x-page.page-header>
        Отладочные функции в Laravel
    </x-page.page-header>

    <x-page.page-text>
        В Laravel вместо функции <code>var_dump()</code> можно использовать специальные функции <code>dd()</code> и
        <code>dump()</code>. Функция <code>dd()</code> (Dump and Die) выводит данные на экран и останавливает дальнейшее
        выполнение кода:
        <br />
        <code>
            $users = User::all();
            <br />
            dd($users);
        </code>
        <br />
        Функция <code>dump()</code> также выводит данные на экран, но не блокирует дальнейшее выполнение кода:
        <br />
        <code>
            $users = User::all();
            <br />
            dump($users);
        </code>
        <br />
    </x-page.page-text>
    <x-page.page-header>
        Панель debugbar в Laravel
    </x-page.page-header>
    <x-page.page-text>
        Рекомендуется установить специальную панель <a
            href="https://github.com/fruitcake/laravel-debugbar">laravel-debugbar</a>. Данная панель - удобный
        инструмент, позволяющий контролировать и отлаживать код. Вы всегда будете в курсе того сколько призошло SQL
        запросов, сколько они заняли времени, что зиписаловсь в лог, сможите посмотреь информацию о текущем пользвателе,
        какие представления использовались для генерации страницы, какие данные в них передавались и много другое. Также
        в любой момент вы сможете просмотреть информацию о предыддущих запросах, даже если произошел редирект.
        <br />
        Панель установливается через Composer:
        <br />
        <code>composer require fruitcake/laravel-debugbar --dev</code>

    </x-page.page-text>
</x-layout-base>
