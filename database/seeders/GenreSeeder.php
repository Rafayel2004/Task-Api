<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $genres = ['Fiction', 'Fantasy', 'Education', 'Adventure', 'Science', 'Nature', 'Romance', 'Travel', 'Health & Well-Being'];
       for ($i = 0; $i < count($genres); $i++) {
           DB::table('genres')->insert([
               'name' => $genres[$i],
               'created_at' => Carbon::now(),
           ]);
       }
    }
}
