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

            DB::table("inspections")->insert([
                ["DATE"=> "2022/11/11",
                "TIME"=> "12:00:00",
                "inspector_id"=> 1,
                "violation_id"=> 1,
                "restaurant_id"=> 1],

                ["DATE"=> "2022/12/11",
                "TIME"=> "12:00:00",
                "inspector_id"=> 2,
                "violation_id"=> 2,
                "restaurant_id"=> 2],
                ["DATE"=> "2023/01/11",
                "TIME"=> "12:00:00",
                "inspector_id"=> 3,
                "violation_id"=> 3,
                "restaurant_id"=> 3],
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
