<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('registration_clinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('clinic_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
            $table->string('rcl_noreg', 8)->default('00000001')->unique();
            $table->tinyInteger('rcl_cara_datang');
            $table->tinyInteger('rcl_tanggungan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration_clinics');
    }
};
