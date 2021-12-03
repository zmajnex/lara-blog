<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seos', function (Blueprint $table) {
            $table->string('canonical_url')->after('meta_description')->nullable();
            $table->string('og_url')->after('og_image')->nullable();
            $table->string('og_secure_image')->after('og_url')->nullable();
            $table->string('language')->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seos', function (Blueprint $table) {
            $table->dropColumn('canonical_url');
            $table->dropColumn('og_url');
            $table->dropColumn('og_secure_image');
            $table->dropColumn('language');
        });
    }
}
