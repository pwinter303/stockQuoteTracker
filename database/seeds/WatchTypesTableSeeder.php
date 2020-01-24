<?php

use Illuminate\Database\Seeder;

class WatchTypesTableSeeder extends Seeder
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
    }





}
