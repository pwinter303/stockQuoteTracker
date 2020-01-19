<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersStocksXrefTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_stocks_xref';

    /**
     * Run the migrations.
     * @table users_stocks_xref
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('users_id', 36);
            #$table->integer('users_id');
            ### must set to unsigned so a integer of length 10 is created to match the ID in stocks table
            ##$table->integer('stocks_id');
            $table->unsignedInteger('stocks_id');

            $table->index(["stocks_id"], 'fk_users_stocks_xref_stocks1_idx');
            $table->index(["users_id"], 'fk_users_stocks_xref_stocks2_idx');


            $table->foreign('stocks_id', 'fk_users_stocks_xref_stocks1_idx')
                ->references('id')->on('stocks')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_users_stocks_xref_stocks2_idx')
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



