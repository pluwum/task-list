<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lets insert a default admin account for demo purpose
        DB::table('users')->truncate();
        DB::table('users')->insert([
                [
                    'first_name' => 'Super',
                    'last_name' => 'User',
                    'email' => 'admin@demo.com',
                    'role' => '1',
                    'password' => bcrypt('123456'),
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
