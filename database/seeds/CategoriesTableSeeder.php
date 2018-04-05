<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('categories')->insert(['name'=>'Category1', 'created_at'=>'2018-03-28 14:25:32', 'updated_at'=>'2018-04-2 11:21:14']);
        DB::table('categories')->insert(['name'=>'Category2', 'created_at'=>'2018-03-28 14:25:45', 'updated_at'=>'2018-04-3 20:01:32']);
        DB::table('categories')->insert(['name'=>'Category3', 'created_at'=>'2018-03-28 14:26:05', 'updated_at'=>'2018-04-3 20:02:05']);
    }
}
