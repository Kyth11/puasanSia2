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
        Schema::create('restaurant', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 45);
            $table->unsignedBigInteger("owner_id");
            $table->integer("phone_number");
            $table->foreign("owner_id")-> references("id")-> on ("owner")-> onDelete("cascade")-> onUpdate("cascade");

        });

        DB::table("restaurant")->insert([
            [ "name" =>"Udangs Foodhause",
             "owner_id" => 1,
             "phone_number" => 1236246346],
            [ "name"=> "Daltan's Kambingan",
            "owner_id"=> 2,
            "phone_number"=> 993463636],
            [ "name"=> "Kabrito's",
            "owner_id"=> 3,
            "phone_number"=> 196634634],

         ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant');
    }
};
