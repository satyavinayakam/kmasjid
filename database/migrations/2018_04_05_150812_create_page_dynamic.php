<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageDynamic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_dynamic', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('page_id');
            $table->string('slug');
            $table->string('title');
            $table->string('page_content');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_dynamic');
    }
}
