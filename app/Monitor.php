<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Monitor extends Model
{
    protected $fillable = ['desc', 'status', 'type', 'user_id'];

    public static function getNotif(){
        return DB::table('monitors')
            ->select('monitors.id as id', 'name', 'desc', 'status')
            ->join('users', 'users.id', '=', 'user_id')
            ->where('type', 1)
            ->orderBy('monitors.id', 'desc')
            ->paginate(10);
    }
}
