<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('id_buku')->constrained('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_buku')->references('id_buku')->on('buku')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('status');
            $table->integer('jumlah');
            $table->timestamps();
        });
        DB::unprepared('
            CREATE TRIGGER pinjam AFTER INSERT ON peminjamen 
            FOR EACH ROW
            BEGIN
            IF new.status = "1" THEN
            UPDATE buku SET stok = stok - new.jumlah WHERE id_buku = new.id_buku;
            END IF;
            END
        ');
        DB::unprepared('
            CREATE TRIGGER kembali AFTER UPDATE ON peminjamen 
            FOR EACH ROW
            BEGIN
            IF new.status = "0" THEN
            UPDATE buku SET stok = stok + new.jumlah WHERE id_buku = new.id_buku;
            END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
