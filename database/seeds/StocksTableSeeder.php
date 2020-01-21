<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = factory(App\Stock::class)->create();
//        $faker = Faker\Factory::create();
//        //$faker = Faker::create();
//        $users = Users::all()->pluck('id')->toArray();
//        $user_id = $faker->randomElement($users);
//
//        DB::table('stocks')->insert([
//            'id' => $user_id,
//            'ticker' => Str::random(10),
//        ]);
    }
}
