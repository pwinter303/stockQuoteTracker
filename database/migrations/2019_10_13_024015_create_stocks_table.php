<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreign('id')->references('id')->on('users');
            $table->string('ticker');
            $table->decimal('price_when_created',12,6);
            $table->decimal('target_price',12,6);
            $table->string('watch_type_cd',5);
            $table->string('watch_status_cd',10);
            $table->date('effective_date');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
