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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_model_id');
            $table->foreign('user_model_id')
                ->references('id')
                ->on('user_models')
                ->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('citizenship');
            $table->string('address');
            $table->string('birth_date');
            $table->string('mob_phone');
            $table->string('job_title');
            $table->string('postcode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
