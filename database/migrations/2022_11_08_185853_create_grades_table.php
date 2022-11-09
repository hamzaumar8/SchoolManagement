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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();

            $table->decimal('cat1', 8, 2)->default(0);
            $table->decimal('gw', 8, 2)->default(0);
            $table->decimal('cat2', 8, 2)->default(0);
            $table->decimal('exam', 8, 2)->default(0);
            $table->decimal('final_exam', 8, 2)->default(0);
            $table->decimal('total', 8, 2)->default(0);
            $table->string('grade', 3)->nullable();

            $table->foreign('grade_id')->references('id')->on('grade_systems')->onDelete('set null');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('set null');
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
        Schema::dropIfExists('grades');
    }
};