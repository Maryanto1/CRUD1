<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\answersModel;

class answersController extends Controller
{
    //
    public function index()
    {
        $datas = answersModel::getAll();
        // dd($data);
        return view('answers', compact('datas'));
    }

    public function show($pertanyaan_id)
    {
        $datas = answersModel::find_by_id($pertanyaan_id);
        // dd($datas);
        // dd(compact('datas'));
        return view('answers.show', compact('datas'));
    }

    // untuk mengarah ke view input data
    public function create() 
    {
        return view('newAnswers');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $data = answersModel::save($data);
        if($data)
        {
            return redirect('/jawaban');
        }
    }
}
