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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);          // 先生の名前
            $table->string('subject', 50);       // 担当科目
            $table->string('image_path')->nullable(); // 写真
            $table->text('message')->nullable(); // メッセージ
            $table->integer('sort_order')->default(0); // 表示順

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
