<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog2', 'namespace' => 'Modules\Blog2\Http\Controllers'], function()
{
    Route::get('/', 'Blog2Controller@index');

    Route::get('/hello',function(){
        echo 'hello world';
    });
});
