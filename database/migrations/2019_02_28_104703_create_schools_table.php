<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('school_name')->nullable();
            $table->string('school_id')->nullable();
            $table->string('district')->nullable();
            $table->string('principal_name')->nullable();
            $table->string('no_of_students')->nullable();
            $table->string('no_of_teachers')->nullable();
            $table->string('no_of_classrooms')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
