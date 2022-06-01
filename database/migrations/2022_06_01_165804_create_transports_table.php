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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('type_transport');
            $table->string('car_model');
            $table->string('status_transport')->default('active');
            $table->date('date_of_registration');
            $table->date('date_of_de_registration')->nullable();
            $table->timestamps();
        });
        /*
         CREATE TABLE TRANSPORT_REFERENCES(
            ID INT PRIMARY KEY AUTO_INCREMENT 	    NOT NULL,
            TYPE_TRAN_REF           VARCHAR(255)    NOT NULL,
            CAR_MODEL               VARCHAR(255)    NOT NULL,
            STATUS_TRAN_REF         VARCHAR(255)    NOT NULL,
            DATE_OF_REGISTRATION    DATE            NOT NULL,
            DATE_OF_DE_REGISTRATION DATE
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
        Schema::dropIfExists('transports');
    }
};
