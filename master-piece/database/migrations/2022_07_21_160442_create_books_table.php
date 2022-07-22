<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->foreignId('costumer_id')->nullable()->constrained('costumers');
            $table->foreignId('product_id')->nullable()->constrained('products');
            $table->integer('date');
            $table->integer('time');
            $table->integer('trainer');
            $table->integer('wears');
            $table->boolean('trainer_A')->nullable();
            $table->boolean('wears_A')->nullable(); 

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
        Schema::dropIfExists('books');
    }
}
