<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('velos', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('titre');
            $table->text('marque');
            $table->text('type');
            $table->text('sexe');
            $table->string('couleur');
            $table->string('image', 320);
            $table->text('description');
            $table->decimal('prix');

            $table->timestamps(); // par default(created_at & updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('velos');
    }
};
