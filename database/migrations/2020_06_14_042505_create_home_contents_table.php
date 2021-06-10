<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('aboutus_heading')->nullable();
            $table->text('aboutus_content')->nullable();
            $table->string('aboutus_image')->nullable();
            $table->string('factory_heading')->nullable();
            $table->text('factory_content')->nullable();
            $table->string('factory_image')->nullable();
            $table->string('outlet_heading')->nullable();
            $table->text('outlet_content')->nullable();
            $table->string('outlet_image')->nullable();
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
        Schema::dropIfExists('home_contents');
    }
}
