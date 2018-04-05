<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('threads')->insert(['user_id'=>1, 'title'=>'Thread 1', 'body'=>'Lorem Ipsum 1']);
        DB::table('threads')->insert(['user_id'=>1, 'title'=>'Thread 2', 'body'=>'Lorem Ipsum 2']);
        DB::table('threads')->insert(['user_id'=>1, 'title'=>'Thread 3', 'body'=>'Lorem Ipsum 3']);
        DB::table('threads')->insert(['user_id'=>1, 'title'=>'Thread 4', 'body'=>'Lorem Ipsum 4']);
        DB::table('threads')->insert(['user_id'=>1, 'title'=>'Thread 5', 'body'=>'Lorem Ipsum 5']);
    }

}
