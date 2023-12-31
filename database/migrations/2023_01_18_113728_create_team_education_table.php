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
        Schema::create('team_educations', function (Blueprint $table) {
            $table->bigIncrements('education_id');
            $table->integer('developer_id');
            $table->string('education_title');
            $table->string('education_titleEs');
            $table->string('education_date' , 999);
            $table->string('education_description',999);
            $table->string('education_descriptionEs',999);
            $table->string('education_country');
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
        Schema::dropIfExists('team_education');
    }
};
