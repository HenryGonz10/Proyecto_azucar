<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPresentationAtProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function(Blueprint $table){
            $table->integer('cantidad')->default(0)->unsigned()->after('precio');
            $table->BigInteger('id_presentation')->unsigned()
            ->nullable()->after('cantidad');

            $table->foreign('id_presentation')->references('id')->on('presentation')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function(Blueprint $table){
            $table->integer('cantidad')->default(0)->unsigned()->after('precio');
            $table->BigInteger('id_presentation')->unsigned()
            ->nullable()->after('cantidad');

            $table->foreign('id_presentation')->references('id')->on('presentation')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }
}
