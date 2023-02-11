<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('pt_norm', 8)->default('00000001')->unique();
            $table->string('pt_name')->unique();
            $table->string('pt_address');
            $table->string('pt_kelurahan');
            $table->string('pt_kecamatan');
            $table->string('pt_city');
            $table->string('pt_hometown');
            $table->date('pt_dateofbirth');
            $table->tinyInteger('pt_religion');
            $table->tinyInteger('pt_blood_type');
            $table->string('pt_phone');
            $table->tinyInteger('pt_status');
            $table->tinyInteger('pt_education');
            $table->string('pt_profession');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
