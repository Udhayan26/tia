<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('ins_book', function (Blueprint $table) {
            $table->string('tnarch_book_id')->primary();
            $table->string('book_ta');
            $table->integer('YEAR')->nullable();
            $table->string('author_ta');
            $table->text('book_archive_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('ins_book');
    }
};
