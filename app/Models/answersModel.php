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

    public static function update($id, $request)
    {
        // dd($request["is_selected"]);
        $data = DB::table('answers')
                    ->where('id', $id)
                    ->update([
                        'isi' => $request["isi"],
                        'is_selected' => $request["is_selected"]
                    ]);
        return $data;
    }

    public static function destroy($id)
    {
        $delete = DB::table('answers')
                    ->where('id', $id)
                    ->delete();
        return $delete;
    }
}

?>