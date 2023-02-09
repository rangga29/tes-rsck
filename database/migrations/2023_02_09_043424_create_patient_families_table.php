<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('patient_families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('ptf_name');
            $table->string('ptf_slug')->unique();
            $table->tinyInteger('ptf_relation');
            $table->string('ptf_address');
            $table->string('ptf_kelurahan');
            $table->string('ptf_kecamatan');
            $table->string('ptf_city');
            $table->string('ptf_phone');
            $table->string('ptf_profession');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patient_families');
    }
};
