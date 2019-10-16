<?php

use Illuminate\Database\Seeder;

// PLW
//use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //plw attempt at using factory....
        //print "hey............\n";
        //$user = factory(App\User::class)->make();
        $user = factory(App\User::class)->create();
        //var_dump($user);

        //
//        DB::table('users')->insert([
//
//            'first_name' => Str::random(10),
//            'last_name' => Str::random(10),
//            'id' => Str::uuid()->toString(),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => bcrypt('password'),
//        ]);
    }
}
