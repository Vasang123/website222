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
    public function up(){
        Schema::create('global_to_do_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('deadline')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('unfinished');
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
        Schema::dropIfExists('global_to_do_lists');
    }
};
