<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('title');
            $table->string('description');
            $table->decimal('price', 9, 2);
            $table->string('picture')->nullable();
            $table->string('picture_two')->nullable();
            $table->string('picture_three')->nullable();
            $table->string('picture_four')->nullable();
            $table->string('picture_five')->nullable();
            $table->string('address')->nullable();
            // $table->foreign('gategury')->references('title')->on('caregurise')->onDelete('cascade'); 
            // $table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('categorises_id')->nullable()->constrained('categorises')->onDelete('cascade');
            $table->string('gategury');
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
        Schema::dropIfExists('products');
    }
}
