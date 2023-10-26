<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('blog', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('title');
    //         $table->text('description');
    //         $table->string('imgUrl');
    //         $table->string('authorimgUrl');
    //         $table->string('authorName');
    //         $table->unsignedBigInteger('category_id');
    //         $table->timestamps();
    //         $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
    //     });
    // }

    public function up():void
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('imgUrl');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->string('authorimgUrl');
            $table->string('authorName');
            $table->timestamps();
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
