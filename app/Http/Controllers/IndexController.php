<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Stock;
use App\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        return view('index', [

            'stocks' =>Stock::all(),
            'events' =>Event::orderBy('created_at', 'desc')->get(),
            'works' =>Work::orderBy('created_at', 'desc')->get(),
//            'categories' => Category::with('children')->where('parent_id', 0)->get()

        ]);

    }
}
