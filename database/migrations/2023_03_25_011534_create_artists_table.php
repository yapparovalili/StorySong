<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('vocal', ['male', 'female', 'double']);
            $table->string('city');
            $table->longText('experience')->nullable();
            $table->longText('achievements')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();
//            $table->foreignId('user_id')->constrained()->cascadeOnDelete();//null?
            $table->boolean('is_verified')->default(false);
            $table->string('phone')->nullable();
            $table->longText('studio')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
