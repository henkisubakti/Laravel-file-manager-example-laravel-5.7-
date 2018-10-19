<?php
use App\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Article::createIndex($shards = null, $replicas = null);

    Article::putMapping($ignoreConflicts = true);

    Article::addAllToIndex();

    return view('welcome');
});

Route::get('/search', function() {

    $articles = Article::searchByQuery(['match' => ['title' => 'Rerum'], ['match' => ['body' => 'alice']]]);

    return $articles;
});

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
