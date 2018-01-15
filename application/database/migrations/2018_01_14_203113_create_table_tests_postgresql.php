<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTestsPostgresql extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('pgsql')->hasTable('tests')) {
            Schema::connection('pgsql')->create('tests', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->date('nasc')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('tests');
    }
}
