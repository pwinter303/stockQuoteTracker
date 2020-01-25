<?php

namespace App;

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

}
