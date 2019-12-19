<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    protected $fillable = ['path', 'user_id'];

    public static function getData(){
        return DB::table('galleries')
            ->select('galleries.id as id', 'path', 'name')
            ->join('users', 'users.id', '=', 'user_id')
            ->orderBy('galleries.id', 'desc')
            ->paginate(10);
    }
    public static function footer(){
        return DB::table('galleries')
            ->orderBy(DB::raw('RAND()'))
            ->take(9)
            ->get();
    }
}
