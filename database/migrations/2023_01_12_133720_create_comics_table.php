<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('slug', 210)->unique();
            $table->text('description')->nullable();
            $table->string('thumb')->default('https://www.boldstrokesbooks.com/assets/bsb/images/book-default-cover.jpg');
            $table->float('price',4,2);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
