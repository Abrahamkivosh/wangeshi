<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chama_user', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->foreign('user_id')->references('id')->on('chamas')->onDelete('cascade');
            $table->integer("chama_id")->nullable();
            $table->foreign('chama_id')->references('id')->on('chamas')->onDelete('cascade');
            $table->boolean("status")->default(false) ;
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
        Schema::dropIfExists('chama_user');
    }
}
