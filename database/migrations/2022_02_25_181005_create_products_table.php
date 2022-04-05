<?php

use App\Models\User;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->decimal("quantity");
            $table->decimal("weight")->nullable() ;
            $table->boolean("type") ; //hardware or software
            $table->boolean('durability') ;//(long lasting or perishable)
            $table->dateTime("expiry_date")->nullable() ; // for perishable goods
            $table->string("image")->nullable(); //product img
            $table->string("location")->nullable(); //picking point of the product
            $table->longText("description")->nullable() ;
            $table->enum('status',['pedding','accepted','rejected'])->default('pedding');
            $table->boolean("transport")->nullable() ; //(willing to transport or red cross to pick)
            $table->foreignIdFor(User::class,'user_id')->onDelete('cascade') ;


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
};
