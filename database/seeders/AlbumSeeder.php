<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Album::factory()->count(10)->create();
    }
}
