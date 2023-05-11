<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('underMaintnance')->default(false);
            $table->boolean('setting2')->default(false);
            $table->boolean('setting3')->default(false);
            $table->boolean('setting4')->default(false);
            $table->boolean('setting5')->default(false);
            $table->boolean('setting6')->default(false);
            $table->timestamps();

        });

        DB::table('settings')->insert([
            'underMaintnance' => false,
            'setting2' => false,
            'setting3' => false,
            'setting4' => false,
            'setting5' => false,
            'setting6' => false,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
