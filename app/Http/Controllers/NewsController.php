<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function news($topic='New News') {
        if (strpos($topic, 'New News') !== False) {
            return view('news.news');
        }
        return view('news.buah');
    }
}
