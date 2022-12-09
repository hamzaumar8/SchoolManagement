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
        Schema::table('grade_systems', function (Blueprint $table) {
            $table->enum('status', ['submitted', 'not submitted'])->default('not submitted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grade_systems', function (Blueprint $table) {
            $table->enum('status', ['submitted', 'not submitted'])->default('not submitted');
        });
    }
};