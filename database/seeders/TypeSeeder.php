<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Web App', 'slug' => 'web-app']);
        Type::create(['name' => 'Mobile App', 'slug' => 'mobile-app']);
        Type::create(['name' => 'Desktop App', 'slug' => 'desktop-app']);
    }
}
