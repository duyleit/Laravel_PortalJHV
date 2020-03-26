<?php

use Illuminate\Database\Seeder;

class PostGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portal_post_group')->insert([
           'name' => 'Chính Sách Công Ty'
        ]);
    }
}
