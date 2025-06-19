<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('user first name.');
            $table->string('last_name')->comment('user last name.');
            $table->string('program')->comment('students program');
            $table->string('enrollment_year')->max(4)->comment('student enrollment year');
            $table->dateTime('birthday')->comment('student birthday');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
