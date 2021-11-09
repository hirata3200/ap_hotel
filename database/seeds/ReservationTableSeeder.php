<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'users_id' => '1',
            'number' => '5',
            'check_in' => '2021-11-5',
            'check_out' => '2021-11-6'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'users_id' => '2',
            'number' => '5',
            'check_in' => '2021-11-5',
            'check_out' => '2021-11-7'
        ];
        DB::table('reserves')->insert($param);
    }
}
