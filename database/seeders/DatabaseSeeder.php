<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Pospantau;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
    }
}
