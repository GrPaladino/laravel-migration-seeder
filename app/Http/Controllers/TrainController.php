<?php

namespace App\Http\Controllers;


use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        $trains = Train::paginate(10);
        return view('train.show', compact('trains'));

    }
}
