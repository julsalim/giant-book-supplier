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
        $table = 'books';

        Schema::create($table, function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id');
            $table->string('title', 100);
            $table->string('author', 100);
            $table->integer('year');
            $table->string('synopsis', 255);
            $table->string('image', 255);
            $table->timestamps();
            $table->foreign('publisher_id')->references('id')->on('publisher');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
