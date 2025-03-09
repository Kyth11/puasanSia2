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
        Schema::create('inspector', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 45);


        });

        DB::table('inspector')->insert(
        [
            ['name' => 'John Doe'],
            ['name' => 'Kevin Smith'],
            ['name' => 'David Jones'],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspector');
    }
};
