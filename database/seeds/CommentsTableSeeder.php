<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('comments')->insert(['thread_id'=>'1', 'user_id'=>'1', 'body'=>'lorem', 'created_at'=>'2018-03-28 14:25:32', 'updated_at'=>'2018-04-2 11:21:14']);
        DB::table('comments')->insert(['thread_id'=>'2', 'user_id'=>'1', 'body'=>'lorem', 'created_at'=>'2018-03-28 14:25:32', 'updated_at'=>'2018-04-2 11:21:14']);
        DB::table('comments')->insert(['thread_id'=>'1', 'user_id'=>'1', 'body'=>'lorem', 'created_at'=>'2018-03-28 14:25:32', 'updated_at'=>'2018-04-2 11:21:14']);
    }
}
