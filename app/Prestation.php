<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prestation extends Model
{
    protected $fillable = [
        'lang', 'date_competition', 'location', 'rank', 'title_competition', 'title', 'desc', 'path', 'user_id'
    ];

    public static function getData(){
        return DB::table('prestations')
            ->select('prestations.id as id', 'title', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->orderBy('prestations.id', 'desc')
            ->paginate(10);
    }
    public static function getDetail($id){
        return DB::table('prestations')
            ->select('date_competition', 'location', 'title_competition', 'title', 'desc', 'path', 'rank', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('prestations.id', $id)
            ->first();
    }
    public static function getRandom(){
        return DB::table('prestations')
            ->select('path', 'prestations.created_at as created_at', 'title', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->orderBy(DB::raw('RAND()'))
            ->take(3)
            ->get();
    }
    public static function welcome(){
        return DB::table('prestations')
            ->select('prestations.id as id', 'date_competition', 'location', 'title_competition', 'title', 'desc', 'path', 'rank', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->orderBy(DB::raw('RAND()'))
            ->take(3)
            ->get();
    }
    public static function resp($skip){
        return DB::table('prestations')
            ->select('prestations.id as id', 'date_competition', 'location', 'title_competition', 'title', 'desc', 'path', 'rank', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->orderBy('prestations.id', 'desc')
            ->offset($skip)
            ->limit(9)
            ->get();
    }
}
