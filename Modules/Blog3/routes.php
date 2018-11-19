<?php

Route::group(['prefix' => 'blog3', 'namespace' => 'Modules\Blog3\Http\Controllers'], function()
{
    Route::get('/', 'Blog3Controller@index');

    Route::get('/hello',function(){
        echo 'hello world';
    });
});
