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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("DATE");
            $table->time("TIME");
            $table->unsignedBigInteger("inspector_id");
            $table->unsignedBigInteger("violation_id");
            $table->unsignedBigInteger("restaurant_id");
                $table->foreign("restaurant_id")-> references("id")-> on ("restaurant")-> onDelete("cascade")-> onUpdate("cascade");
                $table->foreign("violation_id")-> references("id")-> on ("violation")-> onDelete("cascade")-> onUpdate("cascade");
                $table->foreign("inspector_id")-> references("id")-> on ("inspector")-> onDelete("cascade")-> onUpdate("cascade");

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
