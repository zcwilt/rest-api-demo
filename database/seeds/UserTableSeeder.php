<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create( [
            'email' => 'user1@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'user1' ,
            'age' => 16 ,
            'deleted_at' => now(),
        ] );
        App\User::create( [
            'email' => 'user2@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'user2' ,
            'age' => 19 ,
        ] );
        App\User::create( [
            'email' => 'user3@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'user3' ,
            'age' => 23 ,
        ] );
        App\User::create( [
            'email' => 'user4@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'user4' ,
            'age' => 44 ,
        ] );
        App\User::create( [
            'email' => 'user5@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'user5' ,
            'age' => 64 ,
            'deleted_at' => now(),
        ] );
        App\User::create( [
            'email' => 'user6@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'user6' ,
            'age' => 80 ,
        ] );
        //
    }
}
