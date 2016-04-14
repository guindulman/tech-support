<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('ip_add', 16);
            $table->string('mac_add', 19)->nullable();
            $table->integer('tag_no')->nullable();
            $table->string('asignee', 15)->nullable();
            $table->string('status');
            $table->string('department');
            $table->text('remarks', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ipinfos');
    }
}
