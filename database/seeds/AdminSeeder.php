<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'Admin@admin.co',
                'password'=>bcrypt('Admin1'),
                'Date_of_Birth'=>'2020-12-14',
                'address'=>'Dimana aja boleh',
                'gender'=>'male',
                'isAdmin'=>'1'
            ],
        ]);
    }
}
