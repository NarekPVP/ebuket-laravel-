<?php

use Illuminate\Support\Facades\Route;

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
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function() {
    Route::get('/', 'PagesController@index')->name('index');

    Route::post('/register-shop', 'Auth\RegisterController@registerShopStore')->name('register.shop.store');
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    // Данные по сотрудникам
    Route::get('/staff', 'HomeController@staff')->name('staff');
    Route::post('/staff/invite', 'HomeController@staffInvite')->name('staff.invite');
    Route::get('/staff/delete/{staff}', 'HomeController@staffDelete')->name('staff.delete');
    // Регистрация магазина
    Route::get('/register-shop', 'HomeController@registerShop')->name('register.shop');
    // Магазины
    Route::get('/shops', 'HomeController@shops')->name('shops');
    Route::get('/shops/edit', 'HomeController@shopsEdit')->name('shops.edit');
    Route::post('/shops/update', 'HomeController@shopsUpdate')->name('shops.update');
    // Добавление точки магазина
    Route::get('/shops/point/add', 'HomeController@shopPointAdd')->name('shop.point.add');
    Route::post('/shops/point/add', 'HomeController@shopPointAddStore')->name('shop.point.add.store');
    Route::get('/shops/point/edit/{point}', 'HomeController@shopPointEdit')->name('shop.point.edit');
    Route::post('/shops/point/edit/{point}', 'HomeController@shopPointEditUpdate')->name('shop.point.edit.update');
    Route::get('/shops/point/delete/{point}', 'HomeController@shopPointDelete')->name('shop.point.delete');
    // Города магазинов
    Route::get('/shop/cities', 'HomeController@shopCity')->name('shop.city');
    Route::get('/shop/cities/add', 'HomeController@shopCityAdd')->name('shop.city.add');
    Route::post('/shop/cities/add', 'HomeController@shopCityStore')->name('shop.city.store');
    Route::get('/shop/cities/edit/{point}', 'HomeController@shopCityEdit')->name('shop.city.edit');
    Route::post('/shop/cities/edit/{point}', 'HomeController@shopCityUpdate')->name('shop.city.update');
    Route::get('/shop/cities/delete/{point}', 'HomeController@shopCityDelete')->name('shop.city.delete');

    // Обновления профиля | личные данные
    Route::post('/profile/update', 'HomeController@profileUpdate')->name('profile.update');
    // Регистрация магазина по шагам
    Route::post('/register-shop/step/{step}', 'HomeController@registerShopStep')->name('register.shop.step');

    // Товары
    Route::get('/product', 'PagesController@product');
    // Прайсинг
    Route::group(['prefix' => 'price'], function() {
        Route::get('/', 'PriceController@index')->name('price');
        Route::get('/add', 'PriceController@addPrice')->name('price.add.get');
        Route::post('/add', 'PriceController@addPriceStore')->name('price.add.post');
        Route::get('/get/f/name', 'PriceController@getFloverName');

        Route::get('/{price}/edit', 'PriceController@editPrice')->name('price.edit.get');
        Route::post('/{price}/edit', 'PriceController@editPriceStore')->name('price.edit.post');

        Route::get('/{price}/delete', 'PriceController@deletePrice')->name('price.delete.get');
    });
    // Bouquets/Букеты
    Route::group(['prefix' => 'bouquets'], function (){
        Route::get('/', 'BouquetsController@index')->name('bouquets');
        Route::get('/create', 'BouquetsController@create')->name('bouquets.create');
        Route::post('/create', 'BouquetsController@createStore')->name('bouquets.create.store');
        Route::get('/copy/{bouquet}', 'BouquetsController@copy')->name('bouquets.copy');
        Route::get('/delete/{bouquet}', 'BouquetsController@delete')->name('bouquets.delete');
        Route::get('/edit/{bouquet}', 'BouquetsController@edit')->name('bouquets.edit');
        Route::post('/edit/{bouquet}', 'BouquetsController@editSave')->name('bouquets.edit.save');

        Route::get('bouquets/filter', 'BouquetsController@filter')->name('bouquets.filter');
        Route::get('bouquets/filter/category', 'BouquetsController@filtercategory')->name('bouquets.filter.category');
    });
});

Route::get('/{id}', 'BouquetsController@single')->name('bouquets.single');

// Категории
Route::get('/category/{slug}', 'CategoryController@single')->name('category.single');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

