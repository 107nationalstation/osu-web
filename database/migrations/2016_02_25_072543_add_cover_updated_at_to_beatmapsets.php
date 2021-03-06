<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCoverUpdatedAtToBeatmapsets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('osu_beatmapsets', function (Blueprint $table) {
            $table->dateTime('cover_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('osu_beatmapsets', function (Blueprint $table) {
            $table->dropColumn('cover_updated_at');
        });
    }
}
