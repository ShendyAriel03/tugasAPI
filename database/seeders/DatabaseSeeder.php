<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Rak;
use App\Models\Anggota;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
           "kode_anggota" => "123456789",
            "nama_anggota" => "Shendy Ariel",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_tlp_anggota" => "0895392428825",
            "alamat_anggota" => "Halim"
        ]);

        Anggota::create([
            "kode_anggota" => "987654321",
             "nama_anggota" => "Shendy Riano",
             "jk_anggota" => "L",
             "jurusan_anggota" => "RP",
             "no_tlp_anggota" => "0895335070996",
             "alamat_anggota" => "Bebas"
         ]);

         Petugas::create([
            "nama_petugas" => "Syaiful",
            "jabatan_petugas" => "Staf",
            "no_tlp_petugas" => "00899738623",
            "alamat_petugas" => "Kalimalang"
         ]);

         Petugas::create([
            "nama_petugas" => "Ariel",
            "jabatan_petugas" => "Kepala Perpus",
            "no_tlp_petugas" => "08963723232321",
            "alamat_petugas" => "Gatau"
         ]);

         Buku::create([
            "kode_buku" => "12345",
            "judul_buku" => "Cara Bermain",
            "penulis_buku" => "Ipuul",
            "penerbit_buku" => "Bisaaja",
            "tahun_penerbit" => "2020",
            "stok" => "5"
         ]);

         Buku::create([
            "kode_buku" => "12347",
            "judul_buku" => "Cara Makan",
            "penulis_buku" => "Sakhi",
            "penerbit_buku" => "Bisaaja",
            "tahun_penerbit" => "2020",
            "stok" => "3"
         ]);

         Rak::create([
            "nama_rak" => "Tutorial",
            "lokasi_rak" => "lantai-1",
            "nomor_rak" => "8",
            "buku_id" => "1"
         ]);

         Rak::create([
            "nama_rak" => "Sejarah",
            "lokasi_rak" => "lantai-2",
            "nomor_rak" => "9",
            "buku_id" => "2"
         ]);

         Peminjaman::create([
            "tanggal_pinjam" => "2023-08-01",
            "tanggal_kembali" => "2023-09-01",
            "buku_id" => "1",
            "anggota_id" => "1",
            "petugas_id" => "1"
         ]);

         Peminjaman::create([
            "tanggal_pinjam" => "2023-08-01",
            "tanggal_kembali" => "2023-09-01",
            "buku_id" => "2",
            "anggota_id" => "2",
            "petugas_id" => "2"
         ]);

         Pengembalian::create([
            "tanggal_pengembalian" => "2023-09-09",
            "denda" => "35000",
            "buku_id" => "1",
            "anggota_id" => "1",
            "petugas_id" => "1"
         ]);

          Pengembalian::create([
            "tanggal_pengembalian" => "2023-09-09",
            "denda" => "31000",
            "buku_id" => "2",
            "anggota_id" => "2",
            "petugas_id" => "2"
         ]);
    }
}
