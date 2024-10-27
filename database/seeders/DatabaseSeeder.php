<?php

namespace Database\Seeders;

use App\Models\anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       anggota::create([
        'nama' => 'Sugiono',
        'hp' =>'085393932980'
        ]);
       anggota::create([
        'nama' => 'fitri',
        'hp' =>'08539393299'
        ]);
    }
}
