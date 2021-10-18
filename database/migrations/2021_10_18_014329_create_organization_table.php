<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name',250);
            $table->string('web',250)->nullable();
            $table->string('facebook',250)->nullable();
            $table->string('instagram',250)->nullable();
            $table->string('twitter',250)->nullable();
            $table->string('youtube',250)->nullable();

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
        Schema::dropIfExists('organizaton');
    }
}
