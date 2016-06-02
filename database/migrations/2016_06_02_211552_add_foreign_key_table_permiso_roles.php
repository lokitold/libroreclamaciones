<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTablePermisoRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_roles', function (Blueprint $table) {
            //
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')
                ->references('id')->on('roles')
                ->onDelete('cascade');
            $table->integer('permission_id')->unsigned();
            $table->foreign('permission_id')
                ->references('id')->on('permissions')
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
        Schema::table('permission_roles', function (Blueprint $table) {
            //
            $table->dropForeign(['rol_id']);
            $table->dropColumn('rol_id');
            $table->dropForeign(['permission_id']);
            $table->dropColumn('permission_id');
        });
    }
}
