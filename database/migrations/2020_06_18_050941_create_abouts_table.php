<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_heading')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_image')->nullable();
            $table->text('about_desc')->nullable();
            $table->string('service_heading')->nullable();
            $table->text('service_head_desc')->nullable();
            $table->string('partners_heading')->nullable();
            $table->text('partners_head_desc')->nullable();
            $table->string('created_by')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('abouts');
    }
}
