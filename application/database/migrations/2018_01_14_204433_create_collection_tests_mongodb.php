<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionTestsMongodb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #if (!Schema::hasCollection('tests')) {
            Schema::connection('mongodb')->create('tests', function (Blueprint $collection) {
                $collection->index('created_at');
                $collection->index('updated_at');
                $collection->index('nasc');
            });
        #}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->table('tests', function (Blueprint $collection) {
            $collection->drop();
        });
    }
}
