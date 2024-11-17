<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::table('activities', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->after('id'); // Sesuaikan lokasi kolom
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
    
};
