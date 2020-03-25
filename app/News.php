<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $fillable = ['lang', 'type', 'schedule', 'title', 'title', 'desc', 'path', 'user_id'];

    public static function getUserData($type, $user){
        return DB::table('news')
            ->where('user_id', $user)
            ->where('type', $type)
            ->orderBy('id', 'desc')
            ->paginate(10);
    }
    public static function getData($type){
        return DB::table('news')
            ->select('news.id as id', 'title', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('type', $type)
            ->orderBy('news.id', 'desc')
            ->paginate(10);
    }
    public static function getInfo($id){
        return DB::table('news')
            ->select('schedule', 'title', 'desc', 'path', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('news.id', $id)
            ->first();
    }
    public static function getRandom($type){
        return DB::table('news')
            ->select('news.id', 'path', 'news.created_at as created_at', 'title', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('type', $type)
            ->orderBy(DB::raw('RAND()'))
            ->take(3)
            ->get();
    }
    public static function footer($type, $take){
        return DB::table('news')
            ->where('type', $type)
            ->orderBy(DB::raw('RAND()'))
            ->take($take)
            ->get();
    }
    public static function welcome($type, $take){
        return DB::table('news')
            ->select('news.id as id', 'schedule', 'news.created_at as created_at', 'title', 'desc', 'path', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('type', $type)
            ->orderBy(DB::raw('RAND()'))
            ->take($take)
            ->get();
    }
    public static function resp($type, $skip, $take = 0){
        return DB::table('news')
            ->select('news.id as id', 'schedule', 'news.created_at as created_at', 'title', 'desc', 'path', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('type', $type)
            ->orderBy('news.id', 'desc')
            ->offset($skip)
            ->limit($take == 0 ? ($skip == 0 ? 14 : 8) : $take)
            ->get();
    }
}
