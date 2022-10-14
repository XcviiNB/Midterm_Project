<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 2,
                'acct_name' => 'Nathaniel Batausa',
                'init_invest' => 20000,
                'start_date' => '2020-06-09',
                'remarks' => 'Transaction Done'
            ],
            [
                'user_id' => 1,
                'acct_name' => 'Franklin Clinton',
                'init_invest' => 200000,
                'start_date' => '2019-06-09',
                'remarks' => 'Transaction Done'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Lamar Davis',
                'init_invest' => 200000,
                'start_date' => '2019-06-09',
                'remarks' => 'Transaction Done'
            ],
        ];

        foreach ($data as $acc) {
            App\Account::create($acc);
        }
    }
}
