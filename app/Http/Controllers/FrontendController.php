<?php

namespace App\Http\Controllers;


use App\Models\Content;

class FrontendController extends Controller
{
    public function index()
    {

        $rows = Content::paginate(env('PAGE_LIMIT'));

        return view('index', compact('rows'))->with('title', 'Главная');
    }
}
