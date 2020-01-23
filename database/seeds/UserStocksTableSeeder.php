<?php

use Illuminate\Database\Seeder;

class UserStocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\UserStock::class)->create();
    }
}
