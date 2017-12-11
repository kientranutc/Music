<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'Admin',
                'fullname' => 'Admin',
                'email' => 'kienkienutc95@gmail.com',
                'password' => bcrypt('admin@123'),
                'active' => 1
        ]);
    }
}
