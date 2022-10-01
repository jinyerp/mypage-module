<?php

use Illuminate\Support\Facades\DB;

// 사용자 프로파일이 있는지 검사
if (!function_exists("isAvataImage")) {
    function isAvataImage($id)
    {
        if($id) {
            $profile = DB::table('user_profile')->where('user_id',$id)->first();
            if($profile) {
                if($profile->image) {
                    // /photos
                    $path = storage_path('app').DIRECTORY_SEPARATOR;
                    if(file_exists($path.$profile->image)) {
                        return $profile->image;
                    }
                }
            }
        }

        return false;
    }
}

