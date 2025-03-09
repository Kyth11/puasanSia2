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
        Schema::create('violation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("descr", 45);
            $table->string("health_grade");
            $table->string("penalty_points");
        });

        DB::table(  "violation")->insert([
           ["descr"=> "Smelling Kitchen",
            "health_grade"=> "76%",
            "penalty_points"=> "5",],

            ["descr"=> "Smelling Floor",
            "health_grade"=> "76%",
            "penalty_points"=> "2",],
            ["descr"=> "Smelling Walls",
            "health_grade"=> "76%",
            "penalty_points"=> "2"],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violation');
    }
};
