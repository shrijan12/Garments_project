<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navcontacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('navigation_id');
            $table->index('navigation_id');
            $table->string('contact_item');
            $table->string('contact_url');
            $table->string('contact_icons');
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
        Schema::dropIfExists('navcontacts');
    }
}
