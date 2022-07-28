<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->get()->count() == 0){

            $users = DB::table('users')->insert([
                'firstName' => 'Super',
                'lastName' => 'Admin',
                'email' => 'superadmin@gmail.com',
                'phone' => '254700000000',
                'password' => bcrypt('#superadmin#'),
            ]);
        }else
        {
            echo "Users table is not empty.";
        }
    }
}
