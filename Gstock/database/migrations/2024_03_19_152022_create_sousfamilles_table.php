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

        Schema::create('sousfamilles', function (Blueprint $table) {
            $table->id();
            $table->string('sous_famille');
            $table->bigInteger('famille_id')->constrained();
            $table->string('created_by');
            $table->string('updated_by');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sousfamilles');
    }
};