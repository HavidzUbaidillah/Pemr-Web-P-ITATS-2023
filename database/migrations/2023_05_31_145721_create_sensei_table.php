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
        Schema::create('sensei', function (Blueprint $table) {
            $table->id('id_sensei')->startingValue(8000);
            $table->string('nama_sensei')->unique();
            $table->string('password_sensei');
            $table->enum('kantor_sensei', ['Schale Office Residence', 'Millennium Sensei HomeStay']);
            $table->foreignId('sekretaris_id')->constrained('sekretaris', 'id_sekretaris');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensei');
    }
};
