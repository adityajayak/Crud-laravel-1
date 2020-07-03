<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index()
    {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function create()
    {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.form');
    }

    public function sav(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::save($data);
        if ($pertanyaan) {
            return view('pertanyaan');
        }
    }
}