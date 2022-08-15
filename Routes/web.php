<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['web','auth:sanctum', 'verified'])
->prefix('mypage')->group(function() {
    Route::get('/', 'MypageController@index');
    Route::get('profile', 'MypageController@profile');

    Route::get('password', 'MypageController@password');

    Route::get('billing', 'MypageController@billing');
    Route::get('notifications', 'MypageController@notifications');

    // 아비타 이미지 처리
    Route::get('photo/{id?}', 'MypageAvataController@index'); // 사용자 아이디를 지정하는 경우
    Route::get('photos/{filename}', 'MypageAvataController@avata'); // 파일명을 직접 지정하는 경우
    Route::post('photos/upload', 'MypageAvataController@upload');

});
