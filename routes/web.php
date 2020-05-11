<?php

// 测试中间件
Route::get('/', 'PagesController@root')->name('root');

// 在之前的路由里加上一个 verify 参数
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
});
