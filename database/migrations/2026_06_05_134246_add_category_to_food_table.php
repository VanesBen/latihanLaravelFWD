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
        Schema::table('food', function (Blueprint $table) { //Blueprint class yang punya berbagai macam method untuk merepresentasikan si table
            $table->string('category')->after('description')->nullable(); //usahakan nullable dulu kalo mau add new column solanya bisa aja ada data sebelum nya
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('food', function (Blueprint $table) {
            //
        });
    }
};
