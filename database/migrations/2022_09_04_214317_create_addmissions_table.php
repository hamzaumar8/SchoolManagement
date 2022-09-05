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
        Schema::create('addmissions', function (Blueprint $table) {
            $table->id();
            $table->string('addmission_number')->unique();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('other_name')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('home_town')->nullable();
            $table->string('home_digital_address')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('first_language')->nullable();
            $table->string('previous_school')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('class_id')->constrained()->nullable();
            $table->enum('class_type', ['A', 'B'])->nullable();
            $table->enum('term', [1, 2, 3])->nullable();
            $table->enum('accomodation_type', ['day', 'boarding'])->nullable();
            $table->string('phone')->nullable();
            $table->date('date_admitted')->nullable();
            $table->text('picture')->nullable();
            $table->enum('hpa', ['yes', 'no'])->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_home_digital_address')->nullable();
            $table->string('father_postal_address')->nullable();
            $table->text('father_picture')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_phone_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_home_digital_address')->nullable();
            $table->string('mother_postal_address')->nullable();
            $table->text('mother_picture')->nullable();


            $table->string('guardian_name')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_phone_number')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_home_digital_address')->nullable();
            $table->string('guardian_postal_address')->nullable();
            $table->enum('guardian_relation', ['uncle', 'aunty', 'sibling', 'guardian', 'other'])->nullable();
            $table->text('guardian_picture')->nullable();

            $table->string('contact_name1')->nullable();
            $table->string('contact_phone_number1')->nullable();
            $table->string('contact_name2')->nullable();
            $table->string('contact_phone_number2')->nullable();
            $table->enum('status', ['save', 'submit'])->nullable();

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
        Schema::dropIfExists('addmissions');
    }
};