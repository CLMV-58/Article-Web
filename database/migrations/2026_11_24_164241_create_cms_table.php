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
        Schema::create('cms_home', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->longText('content')->nullable();
            $table->foreignId('user_id')
                ->constrained('user')
                ->cascadeOnDelete();
            $table->unique(['user_id', 'section']);
            $table->timestamps();
        });
        Schema::create('cms_about', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->longText('content')->nullable();
            $table->foreignId('user_id')
                ->constrained('user')
                ->cascadeOnDelete();
            $table->unique(['user_id', 'section']);
            $table->timestamps();
        });
        Schema::create('cms_contact', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->longText('content')->nullable();
            $table->foreignId('user_id')
                ->constrained('user')
                ->cascadeOnDelete();
            $table->unique(['user_id', 'section']);
            $table->timestamps();
        });
        Schema::create('cms_articles', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->longText('content')->nullable();
            $table->foreignId('user_id')
                ->constrained('user')
                ->cascadeOnDelete();
            $table->unique(['user_id', 'section']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cms_home', function(Blueprint $table) {
            Schema::dropIfExists('cms_home');
        });
        Schema::table('cms_about', function(Blueprint $table) {
            Schema::dropIfExists('cms_about');
        });
        Schema::table('cms_contact', function(Blueprint $table) {
            Schema::dropIfExists('cms_contact');
        });
        Schema::table('cms_article', function(Blueprint $table) {
            Schema::dropIfExists('cms_article');
        });
    }
};
