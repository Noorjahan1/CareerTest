<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stock extends Controller
{
    function StockTable(){
        $path = storage_path() . "/json/stock_market_data.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true);
        return view('Home',['stocks'=>$json]);
    }
    //
}
