<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_menu', function (Blueprint $table) {
            $table->id('idr_menu');
            $table->integer('idr_parent')->nullable();
            $table->string('name_menu');
            $table->string('kode_menu');
            $table->enum('position_menu',['SIDE','TOP','CONTENT','TITLE','SIDEPARENT','SIDECHILD']);
            $table->string('controller_menu')->nullable();
            $table->string('icon_menu')->nullable();
            $table->integer('order_menu');
            $table->integer('status_menu');
            $table->integer('read_menu');
            $table->integer('add_menu');
            $table->integer('edit_menu');
            $table->integer('delete_menu');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('r_menu');
    }
}
