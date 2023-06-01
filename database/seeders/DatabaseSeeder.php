<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD

use App\Models\News;
use App\Models\User;
use App\Models\Orang;
use App\Models\Video;
use App\Models\Gambar;
use App\Models\Jabatan;
use App\Models\Walikota;
use App\Models\PosPantau;
use App\Models\Organisasi;
use App\Models\Prabencanas;
=======
use App\Models\User;
use App\Models\Pospantau;
>>>>>>> origin/coba
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        User::create([
            'name' => 'Administrator',
            'username' => 'Administrator',
            'email' => 'adminbpbd@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Video::create([
            'jenis' => 'Background Video',
            'nama_video' => 'default.mp4',
            'deskripsi' => '',
        ]);

        Gambar::create([
            'nama_gambar' => 'default.jpg',
            'deskripsi' => '',
        ]);

        Gambar::create([
            'nama_gambar' => 'default.jpg',
            'deskripsi' => '',
        ]);

        Walikota::create([
            'nama' => 'bambang',
            'id_gambar' => '1',
        ]);

        Walikota::create([
            'nama' => 'Agus',
            'id_gambar' => '2',
        ]);

        News::create([
            'judul' => 'Banjir',
            'gambar_berita' => 'banjir.png',
            'deskripsi_berita' => 'aaaaaaaaaaa',
        ]);

        Prabencanas::create([
            'judul' => 'Pencegahan(Prevention)',
            'deskripsi_prabencana' => 'test1',
            'gambar_prabencana' => 'gambar1.png',
        ]);
        Prabencanas::create([
            'judul' => 'Kesiapsiagaan(Preparedness)',
            'deskripsi_prabencana' => 'test2',
            'gambar_prabencana' => 'gambar2.png',
        ]);
        Prabencanas::create([
            'judul' => 'Mitigasi(Mitigation)',
            'deskripsi_prabencana' => 'test3',
            'gambar_prabencana' => 'gambar3.png',
        ]);

        Jabatan::create([
            'jabatan' => 'Kepala Badan'
        ]);
        Jabatan::create([
            'jabatan' => 'Kepala Bidang Pencegahan dan Kesiap-siagaan'
        ]);
        Jabatan::create([
            'jabatan' => 'Kepala Bidang Darlog RR'
        ]);
        Jabatan::create([
            'jabatan' => 'KA. Sub Bagian Keamanan'
        ]);
        Jabatan::create([
            'jabatan' => 'Sub Koordinator Pencegahan'
        ]);

        Jabatan::create([
            'jabatan' => 'Sub Koordinator Operasional Kedaruratan'
        ]);
        Jabatan::create([
            'jabatan' => 'Sub Koordinator Umum Kepegawaian'
        ]);
        Jabatan::create([
            'jabatan' => 'Sub Koordinator Kesiap-siagaan'
        ]);
        Jabatan::create([
            'jabatan' => 'Sub Koordinator Logistik, Rehabilitasi dan Rekontruksi'
        ]);
        PosPantau::create([
            'lat' => '-7.250031',
            'long' => '112.773972',
            'nama' => 'Pos Pantau 1',
            'lokasi' => 'wonokromo',
            'link' => 'https://www.google.com/maps/@-7.250031,112.773972,15z'
        ]);
        PosPantau::create([
            'lat' => '-7.308777',
            'long' => '112.811909',
            'nama' => 'Pos Pantau 2',
            'lokasi' => 'ketintang',
            'link' => 'https://www.google.com/maps/@-7.308777,112.811909,15z'
        ]);
        PosPantau::create([
            'lat' => '-7.301114',
            'long' => '112.683334',
            'nama' => 'Pos Pantau 3',
            'lokasi' => 'kenjeran',
            'link' => 'https://www.google.com/maps/@-7.301114,112.683334,15z'

        ]);
        PosPantau::create([
            'lat' => '-7.253947',
            'long' => '112.699986',
            'nama' => 'Pos Pantau 4',
            'lokasi' => 'dukuh kupang',
            'link' => 'https://www.google.com/maps/@-7.253947,112.699986,15z'
        ]);

        Organisasi::factory(5)->create();
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pospantau::create([
            'lat' => '-7.250031',
            'lng' => '112.773972',
            'nama' => 'Pos Pantau 1',
            'lokasi' => 'wonokromo',
        ]);

        Pospantau::create([
            'lat' => '-7.308777',
            'lng' => '112.811909',
            'nama' => 'Pos Pantau 2',
            'lokasi' => 'ketintang',
        ]);

        Pospantau::create([
            'lat' => '-7.301114',
            'lng' => '112.683334',
            'nama' => 'Pos Pantau 3',
            'lokasi' => 'kenjeran',
        ]);

        Pospantau::create([
            'lat' => '-7.253947',
            'lng' => '112.699986',
            'nama' => 'Pos Pantau 4',
            'lokasi' => 'dukuh kupang',
        ]);
>>>>>>> origin/coba
    }
}
