<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'name' => '佐藤 太郎',
            'mail' => 'satou@gmail.com',
            'age' => 20,
        ];
        DB::table('people')->insert($param);

        $param = [
            'id' => 2,
            'name' => '伊藤 信二',
            'mail' => 'itou@gmail.com',
            'age' => 24,
        ];
        DB::table('people')->insert($param);

    }
}
