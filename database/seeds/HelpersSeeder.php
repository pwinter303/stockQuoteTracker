<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HelpersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delete all the records... then add them.....
        DB::table('trigger_statuses')->delete();

        DB::table('trigger_statuses')->insert([
            'id' => 1,
            'name_long' => 'active - still active',
            'name_short' => 'active'
        ]);
        DB::table('trigger_statuses')->insert([
            'id' => 2,
            'name_long' => 'closed.... no longer used',
            'name_short' => 'dead'
        ]);

        //Delete all the records... then add them.....
        DB::table('trigger_types')->delete();

        DB::table('trigger_types')->insert([
            'id' => 1,
            'name_long' => 'Percent off High',
            'name_short' => 'Pct off High'
        ]);
        DB::table('trigger_types')->insert([
            'id' => 2,
            'name_long' => 'Fixed Price',
            'name_short' => 'Fixed Price'
        ]);

    }

}
