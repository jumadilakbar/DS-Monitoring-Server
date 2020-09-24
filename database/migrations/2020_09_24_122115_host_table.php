<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('host', function (Blueprint $table) {
            $table->increments('id_host');
            $table->string('Hostname');
            $table->string('ip_address');
            $table->string('port');
            $table->string('prm_cpu');
            $table->string('prm_ram');
            $table->string('prm_disk');
            $table->string('status')->default('Not Active');
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
        Schema::dropIfExists('host');
    }
}
