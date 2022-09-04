<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmission_generates', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('addmission_number')->unique();
            $table->string('pin');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->enum('campus', ['north', 'south'])->nullable();
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
        Schema::dropIfExists('addmission_generates');
    }
};