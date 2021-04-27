<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRoomsAddName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('name', 'number');
        });

        Schema::table('rooms', function (Blueprint $table) {
            $table->unique('number');
            $table->string('name', 100)->after('number')->nullable();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropUnique('number');
            $table->dropColumn('name');
            $table->dropSoftDeletes();
        });
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('number', 'name');
        });
    }
}
