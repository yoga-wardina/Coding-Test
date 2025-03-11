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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('idpost');
            $table->text('title');
            $table->text('content');
            $table->dateTime('date')->default(now());
            $table->string('username', 45);
            $table->foreign('username')->references('username')->on('accounts')->onUpdate('no action')->onDelete('no action');
            $table->index('username', 'fk_post_account_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
