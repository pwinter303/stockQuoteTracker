<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserStock extends Model
{
    //PLW - Needed because ID is UUID and not autoincrement
    public $incrementing = false;

    protected $fillable = [
        'user_id', 'stock_id'
    ];

    public function stockTriggers()
    {
        return $this->hasMany(StockTrigger::class);
    }

    public function getUserStocks($user_id)
    {
        $userStocks = DB::table('user_stocks')
            ->where('user_id','=',$user_id)
            ->join('stocks', 'stocks.id', '=', 'user_stocks.stock_id')
            ->select('user_stocks.id', 'ticker', 'name')
            ->get();

        return $userStocks;

    }
}
