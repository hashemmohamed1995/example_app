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
        Schema::create('jouranl_entraie_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jouranl_entraies_id')->constrained()->cascadeOnDelete();
            $table->string("account_name");
            $table->float("debit");
            $table->float("crdit");
            $table->string("notes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jouranl_entraie_details');
    }
};
