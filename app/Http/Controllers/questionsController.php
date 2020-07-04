<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionsModel;

class questionsController extends Controller
{
    //
    public function index()
    {
        $datas = questionsModel::getAll();
        // dd($data);
        return view('index', compact('datas'));
    }

    // untuk mengarah ke view input data
    public function create() 
    {
        return view('newQuestions');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $data = questionsModel::save($data);
        if($data)
        {
            return redirect('/pertanyaan');
        }
    }
}
