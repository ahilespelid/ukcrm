<?php

namespace Database\Seeders;

use App\Models\Reklama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReklamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new Reklama();
        $item->name = Str::random(10);
        $item->title = Str::random(10);
        $item->subtitle = Str::random(10);
        $item->description = Str::random(30);
        $item->active = true;
        $item->views = 38;
        $item->transitions = 6;
        $item->save();

        $item2 = new Reklama();
        $item2->name = Str::random(10);
        $item2->title = Str::random(10);
        $item2->subtitle = Str::random(10);
        $item2->description = Str::random(30);
        $item2->active = true;
        $item2->views = 64;
        $item2->transitions = 12;
        $item2->save();
    }
}
