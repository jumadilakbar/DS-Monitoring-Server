<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->increments('id_notifkasi');
            $table->string('email');
            $table->string('smtp');
            $table->string('port');
            $table->string('penerima_sms');
            $table->string('alarm');
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
        //
        Schema::dropIfExists('notifikasi');

    }
}
