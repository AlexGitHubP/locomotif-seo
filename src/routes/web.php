<?php

Route::group(['middleware'=>'web'], function(){
    Route::resource('/admin/seo', 'Locomotif\Seo\Http\Controller\SeoController');
    Route::POST('/admin/seo/ajaxEdit','Locomotif\Seo\Http\Controller\SeoController@ajaxEdit');
    Route::POST('/admin/seo/ajaxDelete', 'Locomotif\Seo\Http\Controller\SeoController@ajaxDelete');
});


?>
