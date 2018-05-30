<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class student_classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('student_classes') -> insert(
            [[
                'student_id' => 'D0001',
                'class_id' => 'T1701M',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'student_id' => 'D0002',
                'class_id' => 'T1701M',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'student_id' => 'D0003',
                'class_id' => 'T1701M',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'student_id' => 'D0004',
                'class_id' => 'T1702M',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'student_id' => 'D0005',
                'class_id' => 'T1702M',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],[
                'student_id' => 'D0006',
                'class_id' => 'T1702M',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]]
        );
    }
}
