<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTriggersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'stock_triggers';

    /**
     * Run the migrations.
     * @table stock_triggers
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
            #$table->integer('trigger_types_id');
            $table->unsignedInteger('trigger_type_id');
            $table->date('effective_date')->nullable();
            ## Have to use unsignedInteger so it matches the PK on the parent table
            ##$table->integer('trigger_statuses_id');
            $table->unsignedInteger('trigger_status_id');
            $table->timestamps();


            $table->index(["trigger_status_id"], 'fk_stock_triggers_trigger_statuses1_idx');

            $table->index(["trigger_type_id"], 'fk_stock_triggers_trigger_types1_idx');


            $table->foreign('user_stock_id', 'fk_stock_watchs_usersStocks1_idx')
                ->references('id')->on('user_stocks')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('trigger_type_id', 'fk_stock_triggers_trigger_types1_idx')
                ->references('id')->on('trigger_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('trigger_status_id', 'fk_stock_triggers_trigger_statuses1_idx')
                ->references('id')->on('trigger_statuses')
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
