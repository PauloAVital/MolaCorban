<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class newsletter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletter')->insert(['email' => 'arthur@arthur.com.br']);
        DB::table('newsletter')->insert(['email' => 'michelecavital@gmail.com.br']);
        DB::table('newsletter')->insert(['email' => 'pauloavital@gmail.com']);
    }
}
