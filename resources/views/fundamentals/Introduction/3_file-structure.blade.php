<x-layout-base :title="$title">
    <x-page.theme-header>
        Введение в PHP фреймворк Laravel
    </x-page.theme-header>
    <x-page.page-header>
        Файловая структура Laravel
    </x-page.page-header>
    <x-page.page-text>
        После установки у вас появится примерно такая структура:
        <ul>
            <li>/app/<ul>
                    <li>/Http/<ul>
                            <li>/Controllers/</li>
                        </ul>
                    </li>
                    <li>/Models/</li>
                    <li>/Providers/</li>
                </ul>
            </li>
            <li>/bootstrap/<ul>
                    <li>app.php</li>
                </ul>
            </li>
            <li>/config/</li>
            <li>/database/<ul>
                    <li>/migrations/</li>
                    <li>database.sqlite</li>
                </ul>
            </li>
            <li>/public/<ul>
                    <li>index.php</li>
                </ul>
            </li>
            <li>/resources/<ul>
                    <li>/css/</li>
                    <li>/js/</li>
                    <li>/views/</li>
                </ul>
            </li>
            <li>/routes/<ul>
                    <li>web.php</li>
                    <li>console.php</li>
                </ul>
            </li>
            <li>/storage/</li>
            <li>/tests/</li>
            <li>/vendor/</li>
            <li>.env</li>
            <li>artisan</li>
        </ul>
        <br />
        Давайте разберем, что содержится в этих файлах и папках:
        <ul>
            <li>
                Папка <code>app/</code> - основной код
                приложения: контроллеры, модели,
                провайдеры и другие классы.
            </li>
            <li>
                Папка <code>app/Http/Controllers/</code> -
                контроллеры, которые обрабатывают
                запросы.
            </li>
            <li>
                Папка <code>app/Models/</code> - модели
                Eloquent для работы с таблицами БД.
            </li>
            <li>
                Файл <code>bootstrap/app.php</code> -
                точка настройки приложения: маршруты,
                middleware и обработка ошибок.
            </li>
            <li>
                Папка <code>config/</code> - файлы
                конфигурации (приложение, БД, почта
                и другое).
            </li>
            <li>
                Папка <code>database/</code> - миграции,
                сидеры, фабрики. По умолчанию здесь
                же лежит файл SQLite-базы.
            </li>
            <li>
                Папка <code>public/</code> - публичная
                точка входа. Файл <code>index.php</code>
                принимает все HTTP-запросы.
            </li>
            <li>
                Папка <code>resources/views/</code> -
                шаблоны Blade. Стили и скрипты
                лежат в <code>resources/css/</code>
                и <code>resources/js/</code>.
            </li>
            <li>
                Папка <code>routes/</code> - маршруты.
                Файл <code>web.php</code> отвечает за
                веб-маршруты сайта.
            </li>
            <li>
                Папка <code>storage/</code> - логи,
                кэш, скомпилированные шаблоны
                и загруженные файлы.
            </li>
            <li>
                Папка <code>vendor/</code> - зависимости
                Composer. Её вручную не правят.
            </li>
            <li>
                Файл <code>.env</code> - переменные
                окружения: имя приложения, режим
                отладки, доступы к БД и другое.
            </li>
            <li>
                Файл <code>artisan</code> - консольная
                утилита Laravel для команд
                из терминала.
            </li>
        </ul>
    </x-page.page-text>
</x-layout-base>
