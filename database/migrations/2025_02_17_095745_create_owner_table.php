<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("names", 45);
            $table->integer("contact_phone");

        });

        DB::table("owner")->insert([
           [ "names"=> "Kyle Smith",
            "contact_phone" => 1234567890],

            [ "names"=> "Dave Smith",
            "contact_phone" => 1938376666],

            [ "names"=> "Devoune Singler",
            "contact_phone" => 1966488912],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner');
    }
};
