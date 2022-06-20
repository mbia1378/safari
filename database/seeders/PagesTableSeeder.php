<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => "About",
            'url_title' => 'about',
            'description' => "Our Hotel is best among all.",
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

