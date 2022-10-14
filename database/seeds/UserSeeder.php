<?php

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
        $data = [
            [
                'id' => 2,
                'lname' => 'Batausa',
                'fname' => 'Nathaniel',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09201295969',
                'email' => 'nathanielbatausafgo@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'id' => 3,
                'lname' => 'Nacorda',
                'fname' => 'Jose Mari',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09201295960',
                'email' => 'josemarinacorda@gmail.com',
                'password' => bcrypt('password1234')
            ],
            [
                'id' => 1,
                'lname' => 'Samputon',
                'fname' => 'Gypsy Kayl',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09201295961',
                'email' => 'gypsysaputonkaayo@gmail.com',
                'password' => bcrypt('password1235')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
