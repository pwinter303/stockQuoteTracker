<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStocksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_stocks';

    /**
     * Run the migrations.
     * @table userStocks
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id')->primary();
            $table->string('user_id', 36);
            ### must set to unsigned so a integer of length 10 is created to match the ID in stocks table
            ##$table->integer('stocks_id');
            $table->unsignedInteger('stock_id');
            $table->timestamps();


            $table->index(["stock_id"], 'fk_user_stocks1_idx');
            $table->index(["user_id"], 'fk_user_stocks2_idx');


            $table->foreign('stock_id', 'fk_user_stock1_idx')
                ->references('id')->on('stocks')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('user_id', 'fk_user_stocks2_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}



