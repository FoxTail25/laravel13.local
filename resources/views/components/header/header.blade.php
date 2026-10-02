<header class="container-fluid text-center ">

    <!-- 1. Навигационное меню (Ваши бывшие span'ы, теперь это кнопки во вкладках) -->
    <ul class="nav nav-tabs d-flex justify-content-center" id="carouselTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-target="#headerMenuCarusel" data-bs-slide-to="0" data-bs-toggle="pill">
                Базовый
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-target="#headerMenuCarusel" data-bs-slide-to="1" data-bs-toggle="pill">
                Продвинутый
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-target="#headerMenuCarusel" data-bs-slide-to="2" data-bs-toggle="pill">
                Авторизация
            </button>
        </li>
    </ul>
    <!-- 2. Карусель с контентом -->
    <!-- Атрибут data-bs-interval="false" отключает автопрокрутку текста -->
    <div id="headerMenuCarusel" class="carousel slide mt-1" data-bs-interval="false">
        <div class="carousel-inner">
            <!-- Слайд 1 -->
            <div class="carousel-item active">
                <div class="p-1 bg-light border rounded">
                    <h4>Раздел: Базовый Laravel</h4>
                    <div class="container-fluid d-flex gap-1">
                        {{-- <p>Здесь будут ваши решенные задачи по основам, роутингу и контроллерам.</p> --}}
                        <div class="dropdown">
                            <!-- Убрали старый атрибут и добавили конфигурацию фиксированного позиционирования -->
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                data-bs-popper-config='{"strategy":"fixed"}' aria-expanded="false">
                                Начало
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('introduction') }}">Введение</a></li>
                                <li><a class="dropdown-item" href="{{ route('installation') }}">Установка</a></li>
                                <li><a class="dropdown-item" href="{{ route('file-structure') }}">файловая структура</a>
                                <li><a class="dropdown-item" href="{{ route('configuration') }}">конфигурирование
                                        приложения</a>
                                <li>
                                <li><a class="dropdown-item" href="{{ route('DB-type-conf') }}">конфигурирование типа
                                        БД</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('migration-acquaintance') }}">миграции</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('DB-SQLite') }}">ДБ SQLite</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('connecting_other_databases') }}">
                                        подключение MySQL,MariaDB, PostgreSQL
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('debugging-functions-and-panel') }}">
                                        дебаггинг, функции и панель
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <!-- Убрали старый атрибут и добавили конфигурацию фиксированного позиционирования -->
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                data-bs-popper-config='{"strategy":"fixed"}' aria-expanded="false">
                                маршруты
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('introduction-routing') }}">
                                        Введение в роутинг
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Слайд 2 -->
            <div class="carousel-item">
                <div class="p-1 bg-light border rounded">
                    <h4>Раздел: Продвинутый Laravel</h4>
                    <p>Тут будут задачи по миграциям, базам данных и связям Eloquent.</p>
                </div>
            </div>
            <!-- Слайд 3 -->
            <div class="carousel-item">
                <div class="p-1 bg-light border rounded">
                    <h4>Раздел: Авторизация</h4>
                    <p>Задачи по созданию сессий, регистрации пользователей и middleware.</p>
                </div>
            </div>
        </div>
    </div>
</header>
