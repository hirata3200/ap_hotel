<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reserve_id' => '1',
            'room_id' => '1',
            'stay_day' => '2021-11-20',
            'stay_price' => '8000'
        ];
        DB::table('details')->insert($param);

        $param = [
            'reserve_id' => '2',
            'room_id' => '2',
            'stay_day' => '2021-11-25',
            'stay_price' => '12000'
        ];
        DB::table('details')->insert($param);
    }
}
