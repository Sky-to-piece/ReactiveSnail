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
        Schema::create('relation_dr_tr', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_driver');
            $table->unsignedBigInteger('id_transport');
            $table->timestamps();
        });
        /*
         CREATE TABLE DRIVER_TRAN_REF(
            ID INT PRIMARY KEY AUTO_INCREMENT 	NOT NULL,
            ID_DRIVER       INT                 NOT NULL,
            ID_TRAN_REF     INT                 NOT NULL,
            FOREIGN KEY (ID_DRIVER)   REFERENCES DRIVER(ID), --many-to-many
            FOREIGN KEY (ID_TRAN_REF) REFERENCES TRANSPORT_REFERENCES(ID) --many-to-many
            );
        //or
            ALTER TABLE relation_dr_tr ADD CONSTRAINT relation_dr_tr_FK_drivers FOREIGN KEY (id_driver) REFERENCES drivers (id) ON UPDATE NO ACTION ON DELETE NO ACTION;
            ALTER TABLE relation_dr_tr ADD CONSTRAINT relation_dr_tr_FK_transports FOREIGN KEY (id_transport) REFERENCES transports (id) ON UPDATE NO ACTION ON DELETE NO ACTION;

         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_dr_trs');
    }
};
/*
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
/*
public function up()
{
    Schema::table('drivers', function (Blueprint $table) {
        $table->unsignedBigInteger('telephone');
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
/*
public function down()
{
    Schema::table('drivers', function (Blueprint $table) {
        $table->dropColumn('telephone');
    });
}
};

*/
