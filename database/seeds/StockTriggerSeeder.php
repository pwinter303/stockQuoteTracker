<?php

use Illuminate\Database\Seeder;

class StockTriggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = factory(App\StockTrigger::class)->create();
    }
}
