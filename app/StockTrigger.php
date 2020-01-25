<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockTrigger extends Model
{
    //
    //PLW
    public $incrementing = false;

    protected $fillable = [
        'price_when_created', 'target_price', 'effective_date', 'trigger_status_id','id','trigger_type_id',
    ];

}
