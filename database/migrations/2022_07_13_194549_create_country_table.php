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
        Schema::create('country', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char("iso",2);
            $table->string("name",80);
            $table->string("nickname",80);
            $table->string("iso3",3)->nullable()->default(null);
            $table->smallInteger("numcode")->nullable()->default(null);
            $table->integer("phonecode");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
};
