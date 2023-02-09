<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('doctor_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
            $table->string('dcs_code')->unique();
            $table->tinyInteger('dcs_day');
            $table->time('dcs_start');
            $table->time('dcs_end');
            $table->boolean('dcs_is_active')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctor_schedules');
    }
};
