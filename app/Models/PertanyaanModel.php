<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }
    public static function save($data)
    {
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }
    public static function find_by_id($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }
}
