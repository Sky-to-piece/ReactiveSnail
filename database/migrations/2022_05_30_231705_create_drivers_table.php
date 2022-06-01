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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('patronymic')->nullable();
            $table->date('year_of_birth');
            $table->date('date_of_employment');
            $table->date('driving_experience');
            $table->string('photo')->default('/photo/ava_default.png');
            $table->timestamps();
        });
        /*
         CREATE TABLE DRIVER(
            ID INT PRIMARY KEY AUTO_INCREMENT 	NOT NULL,
            LASTNAME   			VARCHAR(255) 	NOT NULL,
            FIRSTNAME			VARCHAR(255) 	NOT NULL,
            PATRONYMIC 			VARCHAR(255),
            YEAR_OF_BIRTH 		DATE			NOT NULL,
            DATE_OF_EMPLOYMENT 	DATE			NOT NULL,
            DRIVING_EXPERIENCE	DATE			NOT NULL,
            PHOTO 				VARCHAR(255)    DEFAULT '/photo/ava_default.png'
            );
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};
