<?php

Route::group(['middleware' => 'web', 'prefix' => 'test', 'namespace' => 'Modules\Test\Http\Controllers'], function()
{
    Route::get('/', 'TestController@index');

    Route::get('/hello',function(){
        echo 'hello world';
    });
});
