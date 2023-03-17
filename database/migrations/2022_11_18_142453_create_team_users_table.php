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
        Schema::create('team_users', function (Blueprint $table) {
            $table->id();
            $table->string('id_name');
            $table->string('name');
            $table->string('email');
            $table->string('photo');
            $table->string('skills');
            $table->integer('status')->default('1');
            $table->string('age');
            $table->string('address');
            $table->string('description');
            $table->string('team_presentation');
            $table->string('cv_link');
            $table->string('residence');
            $table->string('freelance');
            $table->string('team_category');
            $table->string('work_time');
            $table->string('overview');

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
        Schema::dropIfExists('team_users');
    }
};
