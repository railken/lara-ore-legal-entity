<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;

class CreateLegalEntityContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('ore.legal-entity-contact.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->text('notes')->nullable();
            $table->integer('taxonomy_id')->unsigned(); 
            $table->foreign('taxonomy_id')->references('id')->on(Config::get('ore.taxonomy.table')); 
            $table->integer('legal_entity_id')->unsigned(); 
            $table->foreign('legal_entity_id')->references('id')->on(Config::get('ore.legal-entity.table')); 
            $table->softDeletes();
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
        Schema::dropIfExists(Config::get('ore.legal-entity-contact.table'));
    }
}