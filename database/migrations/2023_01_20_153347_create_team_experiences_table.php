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
        Schema::create('team_experience', function (Blueprint $table) {
            $table->bigIncrements('experience_id');
            $table->integer('developer_id');
            $table->string('experience_category');
            $table->string('experience_description', 999);
            $table->string('experience_date');
            $table->string('experience_company');
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
        Schema::dropIfExists('team_experiences');
    }
};
