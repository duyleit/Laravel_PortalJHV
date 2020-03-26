<?php

use Illuminate\Database\Seeder;

class PortalPostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('portal_post')->insert([
        'user_id' => 1,
        'user_fullname' => 'John Nguyen',
        'user_dept' => '',
        'post_group' =>0,
       'title' => '16/04/2019 Đội PCCC thử chuông báo cháy, CB-CNV vẫn làm việc bình thường',
        'description' =>'',
        'picture' => '',
        'content' => '',
         'news' => 0,
        'status' => 0,
        'edited_user_id' => 2,
        'edited_user_fullname' => 'Le Duy',

       ]);

        DB::table('portal_post')->insert([
            'user_id' => 4,
            'user_fullname' => 'Lâm Quế Bình',
            'user_dept' => '',
            'post_group' => 7,
            'title' => 'Tạp chí công ty tháng 01/2019 ',
            'description' =>'',
            'picture' => '',
            'content' => 'Tạp ch&iacute; c&ocirc;ng ty th&aacute;ng 01/2019',
            'news' => 1,
            'status' => 1,
            'edited_user_id' => 4,
            'edited_user_fullname' => 'Lâm Quế Bình',

        ]);

    }
}
