<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('catatans', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable()->after('id');
            $table->string('kk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('pas_foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('catatans', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('kk');
            $table->dropColumn('ktp');
        });
    }
};
