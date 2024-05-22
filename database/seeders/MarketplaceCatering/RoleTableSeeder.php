<?php

namespace Database\Seeders\MarketplaceCatering;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $roles = [
            [
                "id" => 1,
                "roles" => "Merchant",
                "description" => "- Registrasi dan Login: Merchant dapat mendaftar dan login ke portal. 
                \n- Pengelolaan Profil Merchant: Merchant dapat mengelola informasi profil mereka termasuk nama perusahaan, alamat, kontak, dan deskripsi.
                \n- Pengelolaan Menu: Merchant dapat menambahkan, mengedit, dan menghapus menu makanan. Setiap menu harus memiliki deskripsi, foto, dan harga.
                \n- Daftar Order: Melihat semua pesanan & invoice yang masuk dari customer",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 2,
                "roles" => "Customer",
                "description" => "- Registrasi dan Login: Kantor dapat mendaftar dan login ke portal.
                \n- Pencarian Katering: Kantor dapat mencari katering berdasarkan berbagai kriteria (misalnya lokasi, jenis makanan).
                \n- Pembelian: Kantor dapat memilih menu, jumlah porsi, dan tanggal pengiriman makanan.
                \n- Invoice: Setelah melakukan pembelian, sistem harus menghasilkan invoice yang dapat diakses oleh kedua belah pihak (di portal merchant dan kantor).",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];
        DB::table('roles')->insert($roles);
    }
}
