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
        Schema::create('job_listing', function (Blueprint $table) {
            $table->id();
            // foerig id called emplouyee_id
            $table->foreignIdFor(\App\Models\Employer::class); //this uses bigInterger which is the type of interger that increaments. Usd for IDs that are used in the database. This is used to reference the id of the employer table that we created in the database/migrations/2025_07_31_184839_create_employers_table.php file.
            $table->string('title');
            $table->string('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listing');
    }
};
