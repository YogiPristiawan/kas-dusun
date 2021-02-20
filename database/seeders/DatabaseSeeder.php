<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Description;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()
            ->count(2)
            ->state(new Sequence(
                ['role' => 'developer'],
                ['role' => 'admin']
            ))
            ->has(
                Transaksi::factory()
                    ->count(50)
                    ->state(new Sequence(
                        ['kategori' => 'MASUK'],
                        ['kategori' => 'KELUAR']
                    ))
                    ->has(Description::factory())
            )
            ->create();
    }
}
