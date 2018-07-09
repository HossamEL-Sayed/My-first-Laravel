<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_task', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('block_id')->unsigned();
            $table->integer('task_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('block_task', function (Blueprint $table) {
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_task');
    }
}
