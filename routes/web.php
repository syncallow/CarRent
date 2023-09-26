<?php

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

Route::get('/', \App\Http\Controllers\Page\IndexController::class)->name('index');
Route::get('/cars', \App\Http\Controllers\Page\CarsController::class)->name('cars');
Route::get('/search', \App\Http\Controllers\Page\SearchController::class)->name('search');
Route::get('/book', \App\Http\Controllers\Page\BookController::class)->name('book');
Route::get('/blog', \App\Http\Controllers\Page\BlogController::class)->name('blog');
Route::get('/about', \App\Http\Controllers\Page\AboutController::class)->name('about');
Route::get('/contact', \App\Http\Controllers\Page\ContactController::class)->name('contact');
Route::post('/contact', \App\Http\Controllers\Contact\SendContactFormController::class)->name('contact.send');
Route::post('/book', \App\Http\Controllers\Order\StoreController::class)->name('book.store');
Route::get('/blog/{post}', \App\Http\Controllers\Blog\ShowController::class)->name('blog.single');
Route::post('/blog/', \App\Http\Controllers\Comment\StoreController::class)->middleware('auth')->name('comment.store');

Route::post('/carcheck', App\Http\Controllers\CarCheck\CarAvailabilityCheck::class)->name('car.check');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin.index');

    Route::group(['prefix' => 'info'], function(){
       Route::get('/', \App\Http\Controllers\Admin\Info\IndexController::class)->name('admin.info.index');
       Route::get('/{info}', \App\Http\Controllers\Admin\Info\EditController::class)->name('admin.info.edit');
       Route::post('/{info}/update', \App\Http\Controllers\Admin\Info\UpdateController::class)->name('admin.info.update');
    });

    Route::group(['prefix' => 'pages'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Page\IndexController::class)->name('admin.pages.index');
        Route::get('/create', \App\Http\Controllers\Admin\Page\CreateController::class)->name('admin.pages.create');
        Route::post('/', \App\Http\Controllers\Admin\Page\StoreController::class)->name('admin.pages.store');
        Route::get('/{page}', \App\Http\Controllers\Admin\Page\ShowController::class)->name('admin.pages.show');
        Route::get('/{page}/edit', \App\Http\Controllers\Admin\Page\EditController::class)->name('admin.pages.edit');
        Route::patch('/{page}', \App\Http\Controllers\Admin\Page\UpdateController::class)->name('admin.pages.update');
    });

    Route::group(['prefix' => 'promo'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Promo\IndexController::class)->name('admin.promo.index');
        Route::get('/{promo}', \App\Http\Controllers\Admin\Promo\EditController::class)->name('admin.promo.edit');
        Route::patch('/{promo}', \App\Http\Controllers\Admin\Promo\UpdateController::class)->name('admin.promo.update');
    });

    Route::group(['prefix' => 'cars'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Car\IndexController::class)->name('admin.cars.index');
        Route::get('/create', \App\Http\Controllers\Admin\Car\CreateController::class)->name('admin.cars.create');
        Route::post('/', \App\Http\Controllers\Admin\Car\StoreController::class)->name('admin.cars.store');
        Route::get('/{car}', \App\Http\Controllers\Admin\Car\ShowController::class)->name('admin.cars.show');
        Route::get('/{car}/edit', \App\Http\Controllers\Admin\Car\EditController::class)->name('admin.cars.edit');
        Route::patch('/{car}', \App\Http\Controllers\Admin\Car\UpdateController::class)->name('admin.cars.update');
        Route::delete('/{car}', \App\Http\Controllers\Admin\Car\DeleteController::class)->name('admin.cars.delete');
    });

    Route::group(['prefix' => 'features'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Feature\IndexController::class)->name('admin.features.index');
        Route::get('/create', \App\Http\Controllers\Admin\Feature\CreateController::class)->name('admin.features.create');
        Route::post('/', \App\Http\Controllers\Admin\Feature\StoreController::class)->name('admin.features.store');
        Route::get('/{feature}', \App\Http\Controllers\Admin\Feature\ShowController::class)->name('admin.features.show');
        Route::get('/{feature}/edit', \App\Http\Controllers\Admin\Feature\EditController::class)->name('admin.features.edit');
        Route::patch('/{feature}', \App\Http\Controllers\Admin\Feature\UpdateController::class)->name('admin.features.update');
        Route::delete('/{feature}', \App\Http\Controllers\Admin\Feature\DeleteController::class)->name('admin.features.delete');
    });

    Route::group(['prefix' => 'propose'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Propose\IndexController::class)->name('admin.propose.index');
        Route::get('/{propose}', \App\Http\Controllers\Admin\Propose\EditController::class)->name('admin.propose.edit');
        Route::patch('/{propose}', \App\Http\Controllers\Admin\Propose\UpdateController::class)->name('admin.propose.update');
    });

    Route::group(['prefix' => 'posts'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.posts.index');
        Route::get('/create', \App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.posts.create');
        Route::post('/', \App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.posts.store');
        Route::get('/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.posts.show');
        Route::get('/edit/{post}/', \App\Http\Controllers\Admin\Post\EditController::class)->name('admin.posts.edit');
        Route::patch('/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.posts.update');
        Route::delete('/{post}', \App\Http\Controllers\Admin\Post\DeleteController::class)->name('admin.posts.delete');
    });

    Route::group(['prefix' => 'users'], function(){
        Route::get('/', \App\Http\Controllers\Admin\User\IndexController::class)->name('admin.user.index');
        Route::get('/create', \App\Http\Controllers\Admin\User\CreateController::class)->name('admin.user.create');
        Route::post('/', \App\Http\Controllers\Admin\User\StoreController::class)->name('admin.user.store');
        Route::get('/show/{user}', \App\Http\Controllers\Admin\User\ShowController::class)->name('admin.user.show');
        Route::patch('/{user}', \App\Http\Controllers\Admin\User\UpdateController::class)->name('admin.user.update');
        Route::post('/password/{user}', \App\Http\Controllers\Admin\User\ChangePasswordController::class)->name('admin.user.change.password');
        Route::delete('/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('admin.user.delete');
    });

    Route::group(['prefix' => 'comments'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Comment\IndexController::class)->name('admin.comments.index');
        Route::get('/{comment}/edit', \App\Http\Controllers\Admin\Comment\EditController::class)->name('admin.comments.edit');
        Route::patch('/{comment}', \App\Http\Controllers\Admin\Comment\UpdateController::class)->name('admin.comments.update');
        Route::delete('/{comment}', \App\Http\Controllers\Admin\Comment\DeleteController::class)->name('admin.comments.delete');
    });

    Route::group(['prefix' => 'orders'], function(){
        Route::get('/', \App\Http\Controllers\Admin\Order\IndexController::class)->name('admin.orders.index');
        Route::get('/check', \App\Http\Controllers\Admin\Order\CarCheckAController::class)->name('admin.orders.check');
        Route::post('/checking', \App\Http\Controllers\Admin\Order\CheckCarAvailabilityController::class)->name('admin.orders.checking');
        Route::get('/create/{car}', \App\Http\Controllers\Admin\Order\CreateController::class)->name('admin.orders.create');
        Route::post('/', \App\Http\Controllers\Admin\Order\StoreController::class)->name('admin.orders.store');
        Route::get('/{order}', \App\Http\Controllers\Admin\Order\ShowController::class)->name('admin.orders.show');
        Route::get('/{order}/edit', \App\Http\Controllers\Admin\Order\EditController::class)->name('admin.orders.edit');
        Route::patch('/{order}', \App\Http\Controllers\Admin\Order\UpdateController::class)->name('admin.orders.update');
        Route::delete('/{order}', \App\Http\Controllers\Admin\Order\DeleteController::class)->name('admin.orders.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
