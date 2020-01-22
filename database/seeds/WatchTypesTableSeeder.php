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
        DB::table('watch_statuses')->delete();

        DB::table('watch_statuses')->insert([
            'id' => 1,
            'watch_status_name_long' => 'active - still active',
            'watch_status_name_short' => 'active'
        ]);
        DB::table('watch_statuses')->insert([
            'id' => 2,
            'watch_status_name_long' => 'closed.... no longer used',
            'watch_status_name_short' => 'dead'
        ]);
    }





}
