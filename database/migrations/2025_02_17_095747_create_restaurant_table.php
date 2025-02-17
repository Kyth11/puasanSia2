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
        Schema::create('restaurant', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 45);
            $table->unsignedBigInteger("owner_id");
            $table->integer("phone_number");
            $table->foreign("owner_id")-> references("id")-> on ("owner")-> onDelete("cascade")-> onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant');
    }
};
