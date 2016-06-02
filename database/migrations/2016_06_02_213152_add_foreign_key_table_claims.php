<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTableClaims extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('claims', function (Blueprint $table) {
            //
            $table->integer('office_id')->unsigned();
            $table->foreign('office_id')
                ->references('id')->on('offices')
                ->onDelete('cascade');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                ->references('id')->on('clients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            //
            $table->dropForeign(['office_id']);
            $table->dropColumn('office_id');
            $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });
    }
}
