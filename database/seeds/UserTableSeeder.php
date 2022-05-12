<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\User::class, 20)->create();

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'lastname' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     'phone' => rand(),
        //     'location' => Str::random(10),
        //     'category' =>Str::random(10),
        //     'aboutven' =>Str::words(3),

        // ]);
    }

}
