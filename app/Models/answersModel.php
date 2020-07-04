<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class answersModel{
    public static function getAll()
    {
        $data = DB::table('answers')->get();
        return $data;
    }

    public static function save($data)
    {
        $new_data = DB::table('answers')->insert($data);
        return $new_data;
    }

    public static function find_by_id($id)
    {
        $data = DB::table('answers')->where('id', $id)->get();
        return $data;
    }
}

?>