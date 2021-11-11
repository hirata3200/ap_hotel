<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_id' => '1',
            'room_number' => '501'
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_id' => '2',
            'room_number' => '600'
        ];
        DB::table('rooms')->insert($param);
    }
}
