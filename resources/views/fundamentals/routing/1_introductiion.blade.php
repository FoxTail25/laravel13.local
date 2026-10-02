<x-layout-base :title="$title">
    <x-page.theme-header>
        Маршруты в Laravel
    </x-page.theme-header>
    <x-page.page-header>
        Введение в маршруты в Laravel
    </x-page.page-header>
    <x-page.page-text>
        Маршруты (или роуты) указывают фреймворку, что показывать при обращении к определенному URI в браузере.
        <br />
        Маршруты настраиваются в файле <code>routes/web.php</code>. Изначально там уже есть вот такой маршрут:
    </x-page.page-text>

    <pre class="watermark-block">use Illuminate\Support\Facades\Route;

	Route::get('/', function () {
		return view('welcome');
	});</pre>

</x-layout-base>
