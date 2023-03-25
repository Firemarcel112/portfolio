<?php

    use App\Http\Controllers\Curl;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        App::setLocale($lang);
        $curl = new Curl();
        $curl->setToken(env('GITHUB_TOKEN'));
        $curl->setHeaders('Accept: application/vnd.github+json');
        $curl->setHeaders("Authorization: Bearer {$curl->getToken()}");
        $curl->setHeaders('X-Github-Api-Version: 2022-11-28');
        $fetch = $curl->get('https://api.github.com/repositories');
        return view('home', compact('fetch'));
    })->name('home');;

    Route::get('/{locale}', function(string $locale) {
        App::setLocale($locale);
        return view('home');
    })->name('home.debug');

    Route::prefix('projects')->group(function() {
        Route::get('/{projectNr}', function() {
            return view('home');
        })->name('project.details');
    });
