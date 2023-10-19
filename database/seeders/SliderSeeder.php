<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Sliders;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('slider')->insert([
        //     'title' => Str::random(20),
        //     'content' => Str::random(100),
        //     'imgUrl' => 'post-landscape-1.jpg',
        //     'created_at'=>now(),
        // ]);
        
        // $this->call([
        //     SliderSeeder::class,
        // ]);

        Sliders::factory(10)->create();
        
    }
}
