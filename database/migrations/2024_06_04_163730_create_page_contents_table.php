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
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('about_us'); // 紹介
            $table->text('medical'); // 診療概要
            $table->text('internal'); // 内科
            $table->text('pediatrics'); // 小児科
            $table->text('dermatology'); // 皮膚科
            $table->text('message'); // ご挨拶
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_contents');
    }
};
