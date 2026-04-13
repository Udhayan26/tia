<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tnarchs01', function (Blueprint $table) {
            $table->bigIncrements('s_no');
            $table->string('tnarch_ins_no')->index();
            $table->string('dynasty_ta')->nullable();
            $table->string('king_ta')->nullable();
            $table->text('summary_ta')->nullable();
            $table->longText('Inscription'); // Use longText for large Tamil scripts
            $table->string('village_no');
            $table->string('book_id');
            $table->string('gps_Location')->nullable();
            $table->timestamps();

            // Logic relationships
            $table->foreign('village_no')->references('village_no')->on('locations');
            $table->foreign('book_id')->references('tnarch_book_id')->on('ins_book');
        });
    }

    public function down(): void {
        Schema::dropIfExists('tnarchs01');
    }
};
