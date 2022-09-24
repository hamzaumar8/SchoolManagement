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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('addmission_number')->unique();
            $table->string('index_number')->unique();
            $table->string('first_name');
            $table->string('surname');
            $table->string('other_name')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('birthdate');
            $table->enum('class_type', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('campus', ['north', 'south'])->nullable();

            $table->unsignedBigInteger('addmission_id')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->timestamps();
            $table->foreign('addmission_id')->references('id')->on('addmissions')->onDelete('set null');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};