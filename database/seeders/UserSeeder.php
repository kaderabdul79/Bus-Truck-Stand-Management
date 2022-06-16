<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data users tbl
        $users = [
            ['name' => 'alam','email'=>'alam@gmail.com','password'=>12345678,'is_admin'=>true],
            ['name' => 'tanvir','email'=>'tanvir@gmail.com','password'=>12345678,'is_admin'=>false]
        ];
        User::insert($users);
    }
}
