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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('token');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('staff_number')->unique();
            $table->enum('staff_type', ['teacher', 'non-teaching', 'administrator'])->nullable();
            $table->enum('title', ['Prof.', 'Dr.', 'Rev.', 'Mr.', 'Mrs.', 'Miss', 'Ms.']);
            $table->string('full_name')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('email')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('residential_address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('religion')->nullable();
            $table->enum('marital_status', ['single', 'married', 'separated', 'divorced', 'widow'])->nullable();
            $table->text('passport_picture')->nullable();
            $table->enum('campus', ['north', 'south'])->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('staff');
    }
};