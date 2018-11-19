<?php

Route::group(['middleware' => 'web', 'prefix' => 'nice', 'namespace' => 'Modules\Nice\Http\Controllers'], function()
{
    Route::get('/', 'NiceController@index');

    Route::get('/hello',function(){
        echo 'hello world';
    });
});
