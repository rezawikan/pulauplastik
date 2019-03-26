<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherLangIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('others', function (Blueprint $table) {
            $table->integer('other_lang_id')->unsigned()->index()->nullable();

            $table->foreign('other_lang_id')->references('id')->on('other_langs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('others', function (Blueprint $table) {
            $table->dropForeign('others_other_lang_id_foreign');
            $table->dropIndex('others_other_lang_id_index');
        });
    }
}
