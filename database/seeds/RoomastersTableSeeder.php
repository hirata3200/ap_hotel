<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '桜の間',
            'max_number' => '5'
        ];
        DB::table('roomasters')->insert($param);

        $param = [
            'name' => '束の間',
            'max_number' => '500'
        ];
        DB::table('roomasters')->insert($param);
    }
}
