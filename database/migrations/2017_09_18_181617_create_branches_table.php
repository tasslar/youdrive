<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branch_name', 100);
            $table->string('street', 100);
            $table->string('street_no', 100);
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('master_countries')->onDelete('cascade');
            //$table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('federal_state', 100);
            $table->string('phone_no', 100);
            $table->string('fax', 100);
            $table->string('email', 100);
            $table->string('internet', 100);
            $table->string('image_url', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
