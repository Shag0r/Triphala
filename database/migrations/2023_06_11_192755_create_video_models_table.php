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
        Schema::create('video_models', function (Blueprint $table) {
            $table->id();
            $table->string('vtitle');
            $table->string('vcata');
            $table->string('vsource');
            $table->string('vsumm');
            $table->string('video');
            $table->string('vstatus');


           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_models');
    }
};
