<?php

use Illuminate\Database\Seeder;

class PortalFileTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portal_file')->insert([
            'post_id' => 18,
            'user_id' => 4,
            'user_fullname' => 'Lâm Quế Bình',
            'file' => '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf',
            'filename' => '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf',
            'status' => 1,
            'edited_user_id' => 1,
            'edited_user_fullname' => ''
        ]);

        DB::table('portal_file')->insert([
            'post_id'=> 20,
            'user_id' => 2,
            'user_fullname' => 'Le Duy',
            'file' => '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf',
            'filename' => 'sample.docx',
            'status' => 1,
            'edited_user_id'=>1,
            'edited_user_fullname' => ''
        ]);
    }
}
