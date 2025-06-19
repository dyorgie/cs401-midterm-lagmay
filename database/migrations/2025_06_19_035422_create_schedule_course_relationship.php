<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedule_course_relationship', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('course_id')->references('id')->on('course');
            $table->foreign('schedule_id')->references('id')->on('schedule');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');
        });

        Schema::table('schedule', function (Blueprint $table) {
            $table->dropForeign(['schedule_id']);
            $table->dropColumn('schedule_id');
        });
    }
};
