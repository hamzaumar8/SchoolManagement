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
            $table->string('last_name');
            $table->string('surname');
            $table->string('other_name')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('birthdate');
            $table->string('birthplace');
            $table->string('religion');
            $table->string('nationality');
            $table->string('home_town');
            $table->string('home_digital_address');
            $table->string('postal_address')->nullable();
            $table->string('first_language')->nullable();
            $table->string('previous_school')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('class_id')->constrained()->nullOnDelete;
            $table->enum('class_type', ['A', 'B'])->nullable();
            $table->enum('term', [1, 2, 3])->nullable();
            $table->enum('accomodation_type', ['day', 'boarding'])->nullable();
            $table->string('phone')->nullable();
            $table->date('date_admitted')->nullable();
            $table->text('picture')->nullable();
            $table->enum('hpa', ['yes', 'no'])->nullable();
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
        Schema::dropIfExists('students');
    }
};