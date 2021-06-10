<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navitems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('navigation_id');
            $table->index('navigation_id');
            $table->string('nav_name');
            $table->string('nav_url');
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
        Schema::dropIfExists('navitems');
    }
}
