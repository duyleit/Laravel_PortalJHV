<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_fullname',64);
            $table->string('user_dept',5);
            $table->integer('post_group')->default(1);
            $table->string('title',256);
            $table->string('description',250);
            $table->string('picture',512);
            $table->text('content');
            $table->datetime('date_start')->nullable();
            $table->datetime('date_end')->nullable();
            $table->integer('news')->default(0);
            $table->integer('status')->default(0);
            $table->timestamp('created')->useCurrent();
            $table->timestamp('modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->integer('edited_user_id');
            $table->string('edited_user_fullname',64);
            $table->datetime('deleted')->nullable();
            $table->integer('deleted_user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portal_post');
    }
}
