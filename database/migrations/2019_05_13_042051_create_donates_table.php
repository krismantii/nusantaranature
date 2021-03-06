<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('camp_id');
            $table->string('nama_camp');
            $table->string('daerah');
            $table->text('desc_camp');
<<<<<<< HEAD
=======
            $table->string('foto');
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
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
        Schema::dropIfExists('donates');
    }
}
