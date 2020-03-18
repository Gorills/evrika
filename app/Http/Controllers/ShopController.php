<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function stock($slug) {

        $stock = Stock::where('slug', $slug)->first();

        return view('stock', [

            'stock' => $stock,
            'stocks' => $stock->get()

        ]);

    }


}
