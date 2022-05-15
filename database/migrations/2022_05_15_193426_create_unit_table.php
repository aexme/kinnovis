<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id');
            $table->integer('unit_type_id');
            $table->string('name');
            $table->string('status');
            $table->integer('floor');
            $table->float('area');
            $table->float('width');
            $table->float('depth');
            $table->float('volume');
            $table->float('ceiling_height');
            $table->float('door_height');
            $table->float('door_width');
            $table->string('door_type');
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
        Schema::dropIfExists('unit');
    }
};
