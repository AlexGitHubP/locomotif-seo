<?php

Route::group(['middleware'=>'web'], function(){
    Route::resource('/admin/seo', 'Locomotif\Seo\Http\Controller\Seo');
    Route::POST('/admin/seo/ajaxEdit','Locomotif\Seo\Http\Controller\Seo@ajaxEdit');
    Route::POST('/admin/seo/ajaxDelete', 'Locomotif\Seo\Http\Controller\Seo@ajaxDelete');
});


?>
