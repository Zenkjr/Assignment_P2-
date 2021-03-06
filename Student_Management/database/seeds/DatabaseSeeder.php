<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('classes') -> insert(
            [[
                'id' => 'T1701M',
                'status' => '1'
            ],[
                'id' => 'T1702M',
                'status' => '1'
            ],[
                'id' => 'T1703M',
                'status' => '0'
            ],[
                'id' => 'T1704M',
                'status' => '1'
            ],[
                'id' => 'T1705M',
                'status' => '0'
            ]
            ]
        );
    }
}
