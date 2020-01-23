<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockWatchesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'stock_watches';

    /**
     * Run the migrations.
     * @table stock_watches
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('id')->primary();
            ##Change to match PK in parent table
            $table->string('user_stock_id', 36);

            $table->decimal('price_when_created', 12, 6)->nullable();
            $table->decimal('target_price', 12, 6)->nullable();
            ## Have to use unsignedInteger so it matches the PK on the parent table
            #$table->integer('watch_types_id');
            $table->unsignedInteger('watch_types_id');
            $table->date('effective_date')->nullable();
            ## Have to use unsignedInteger so it matches the PK on the parent table
            ##$table->integer('watch_statuses_id');
            $table->unsignedInteger('watch_statuses_id');
            $table->timestamps();


            $table->index(["watch_statuses_id"], 'fk_stock_watches_watch_statuses1_idx');

            $table->index(["watch_types_id"], 'fk_stock_watches_watch_types1_idx');


            $table->foreign('user_stock_id', 'fk_stock_watchs_usersStocks1_idx')
                ->references('id')->on('user_stocks')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('watch_types_id', 'fk_stock_watches_watch_types1_idx')
                ->references('id')->on('watch_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('watch_statuses_id', 'fk_stock_watches_watch_statuses1_idx')
                ->references('id')->on('watch_statuses')
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
