<?php

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $stock = DB::table('stocks')->get();
         if(!($stock->isEmpty())){
            
              return view('Table',['stocks'=>$stock]);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $stock = DB::table('stocks')->get();
        if( $stock->isEmpty()){
        $path = storage_path() . "/json/stock_market_data.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true);
          foreach ($json as $s) {

            DB::table('stocks')->upsert([
                    ['date' =>$s["date"], 
                    'trade_code' => $s["trade_code"],
                     'high' =>$s["high"],
                    'open' =>$s["open"],
                    'low' =>$s["low"],
                    'close' =>$s["close"],
                    'volume' =>$s["volume"],
                     
                    ],
                   
                      ], ['date', 
                     'trade_code',
                     'high',
                     'open',
                     'low',
                     'close',
                     'volume'

                      ]
                      
                      );    
             }
        }
       
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        //
    }
}
