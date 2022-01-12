<?php

use App\Models\Chama;
use App\Models\User;
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
            $table->foreignIdFor(User::class,"user_id")->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->foreignIdFor(Chama::class,"chama_id")->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string("approved")->default(0); // 0 => not approved by admin 1=> approved by admin
            $table->string("received")->default(0) ; //1 => member has received current amount 0=> not yet 
            $table->string("receive_date")->nullable() ; // date member received chama amount 
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
