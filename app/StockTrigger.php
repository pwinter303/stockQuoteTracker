<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StockTrigger extends Model
{
    //
    //PLW
    public $incrementing = false;

    protected $fillable = [
        'price_when_created', 'target_price', 'effective_date', 'trigger_status_id','id','trigger_type_id',
    ];


    public function getUserStockTriggers($user_stock_id)
    {
        $userStocks = DB::table('stock_triggers')
            ->where('user_stock_id','=',$user_stock_id)
            ->join('user_stocks', 'stock_triggers.user_stock_id', '=', 'user_stocks.id')
            ->join('stocks', 'stocks.id', '=', 'user_stocks.stock_id')
            ->select('user_stocks.id', 'user_stocks.user_id','user_stocks.stock_id','ticker', 'name','target_price')
            ->get();

        return $userStocks;

    }

}
