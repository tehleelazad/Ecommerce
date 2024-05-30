<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('stock');
            $table->string('warranty')->nullable();
            $table->unsignedBigInteger('category_id'); 
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade'); // Set the foreign key constraint
            $table->string('image')->nullable();
           
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
