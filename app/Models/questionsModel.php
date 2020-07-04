<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class questionsModel{
    public static function getAll()
    {
        $data = DB::table('questions')->get();
        return $data;
    }

    public static function save($data)
    {
        $new_data = DB::table('questions')->insert($data);
        return $new_data;
    }
}

?>