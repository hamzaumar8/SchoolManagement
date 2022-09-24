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
            $table->string('first_language')->nullable();
            $table->string('previous_school')->nullable();
            $table->string('previous_class')->nullable();
            $table->string('class_approved')->nullable();
            $table->enum('class_type', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('term', [1, 2, 3])->nullable();
            $table->enum('accomodation_type', ['day', 'boarding'])->default('day');
            $table->enum('campus', ['north', 'south'])->nullable();
            $table->date('date_admitted')->nullable();
            $table->text('passport_picture')->nullable();

            // Parent information
            $table->string('father_name')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_home_digital_address')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_phone_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_home_digital_address')->nullable();

            $table->string('guardian_name')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_phone_number')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_home_digital_address')->nullable();
            $table->enum('guardian_relation', ['uncle', 'aunty', 'sibling', 'guardian', 'other'])->nullable();

            $table->enum('parent_staff', ['staff', 'non-staff'])->nullable();

            // for Staff Only
            $table->string('personnel_number')->nullable();
            $table->string('unit_section_department')->nullable();
            $table->enum('registered_biological_ward', ['yes', 'no'])->nullable();
            $table->enum('registered_ward', ['yes', 'no'])->nullable();
            $table->string('registered_ward_explain')->nullable();

            // Contact Information
            $table->string('contact_name1')->nullable();
            $table->string('contact_phone_number1')->nullable();
            $table->string('contact_name2')->nullable();
            $table->string('contact_phone_number2')->nullable();
            $table->enum('status', ['save', 'submit', 'addmitted'])->default('save');

            // Health Status
            $table->enum('chronic_health_problem', ['yes', 'no'])->nullable();
            $table->text('chp_report')->nullable();
            $table->enum('diagnose_physical_challenge', ['yes', 'no'])->nullable();
            $table->text('dpc_report')->nullable();

            // disciplinary report
            $table->enum('disciplinary_problem', ['yes', 'no'])->nullable();

            // significant information
            $table->string('athletics1')->nullable();
            $table->string('athletics2')->nullable();
            $table->string('games1')->nullable();
            $table->string('games2')->nullable();
            $table->string('hobbies1')->nullable();
            $table->string('hobbies2')->nullable();
            $table->string('academic_achievement1')->nullable();
            $table->string('academic_achievement2')->nullable();

            // development Development
            $table->enum('neatness', ['A', 'B', 'C'])->nullable();
            $table->enum('honesty', ['A', 'B', 'C'])->nullable();
            $table->enum('emotinal_control', ['A', 'B', 'C'])->nullable();
            $table->enum('friendliness', ['A', 'B', 'C'])->nullable();
            $table->enum('work_habits', ['A', 'B', 'C'])->nullable();

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