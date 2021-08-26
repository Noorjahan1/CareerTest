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
         $data=$stock;
         if(!($stock->isEmpty())){
            
              return view('Table',['stocks'=>$stock,"lineChart"=>$data]);
         }else{
           return view('PopulateD');
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
         return redirect()->action([StockController::class, 'index']);
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
          DB::table('stocks')->upsert([
                    ['date' =>$request->input("date"), 
                    'trade_code' => $request->input("trade_code"),
                     'high' =>$request->input("high"),
                    'open' =>$request->input("open"),
                    'low' =>$request->input("low"),
                    'close' =>$request->input("close"),
                    'volume' =>$request->input("volume"),
                     
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
        return redirect()->action([StockController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('New');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $stock = DB::table('stocks')->where('id', '=', $id)->first();
      
    return view('EditForm',['stock'=>$stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $stock)
    {

          DB::table('stocks')
              ->where('id',$stock)
              ->update([ 'date'=>$request["date"], 
                     'trade_code'=> $request["trade_code"],
                     'high'=>$request["high"],
                     'open'=>$request["open"],
                     'low'=>$request["low"],
                     'close'=>$request["close"],
                     'volume'=>$request["volume"]

              ]);
        
            return redirect()->action([StockController::class, 'index']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy( $stock)
    {   
        DB::table('stocks')->where('id', '=', $stock)->delete();
        return redirect()->action([StockController::class, 'index']);
        // echo ("deleted");
    }
}
