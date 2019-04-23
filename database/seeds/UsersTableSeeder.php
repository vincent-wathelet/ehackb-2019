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
        DB::table('users')->insert([
            [
                'email' => 'mike.derycke@ehb.be',
                'firstname' => 'Mike',
                'lastname' => 'Derycke',
                'isAdmin' => 1,
                'password' => bcrypt('erasmus'),
                'hasRole' => false,
                'confirmed' => true,
            ],
            [
                'email' => 'vincent.wathelet@student.ehb.be',
                'firstname' => 'Vincent',
                'lastname' => 'Wathelet',
                'isAdmin' => 1,
                'password' => bcrypt('erasmus'),
                'hasRole' => false,
                'confirmed' => true,
            ]
        ]);
    }
}
