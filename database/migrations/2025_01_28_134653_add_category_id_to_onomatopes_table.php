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
        Schema::table('onomatopes', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained();
            //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('onomatopes', function (Blueprint $table) {
            
        });
    }
};
