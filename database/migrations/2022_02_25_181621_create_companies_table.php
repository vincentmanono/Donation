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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name') ;
            $table->string('certificate')->nullable() ;
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('location')->nullable();
            $table->string('services')->nullable();
            $table->foreignIdFor(User::class,'user_id') ;

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
        Schema::dropIfExists('companies');
    }
};
