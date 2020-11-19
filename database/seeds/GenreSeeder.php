<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert([
            'name' => 'Drama'
        ]);

        DB::table('genres')->insert([
            'name' => 'Kids'
        ]);

        DB::table('genres')->insert([
            'name' => 'TV Show'
        ]);
    }
}
