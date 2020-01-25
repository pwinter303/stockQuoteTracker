<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(UserStocksTableSeeder::class);
//        $this->call(HelpersSeeder::class);
        $this->call(StockTriggerSeeder::class);
    }
}
