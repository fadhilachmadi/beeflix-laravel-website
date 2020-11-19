<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Black Mirror',
            'photo' => '/image/black_mirror.jpg',
            'description' => 'Film yang menceritakan tentang pengaruh teknologi terhadap kehidupan',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Kingdom',
            'photo' => '/image/kingdom.jpg',
            'description' => 'Kehidupan pada masa kerjaaan yang berubah akibat berkembangnya wabah zombie',
            'rating' => 3,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Doom Patrol',
            'photo' => '/image/doom_patrol.jpg',
            'description' => 'Menceritakan sekumpulan superhuman yang mempertanyakan jati diri mereka',
            'rating' => 5,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Cek Toko Sebelah',
            'photo' => '/image/cek_toko_sebelah.jpg',
            'description' => 'Sebuah kisah suasana sebuah warung',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Rumah Uya',
            'photo' => '/image/rumah_uya.jpg',
            'description' => 'Menceritakan kisah keluarga penuh konflik yang sangat membuat kita dapat menitikkan air mata',
            'rating' => 1,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Durarara!!!',
            'photo' => '/image/durarara.jpg',
            'description' => 'Memperlihatkan suasana kota Ikebukuro',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Psycho-Pass',
            'photo' => '/image/psycho_pass.jpg',
            'description' => 'Mengisahkan kehidupan dengan teknologi tinggi',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Hunter x Hunter',
            'photo' => '/image/hunter_x_hunter.jpg',
            'description' => 'Menceritakan perjalanan seorang anak yang mencari bapak nya',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Sket Dance',
            'photo' => '/image/sket_dance.jpg',
            'description' => 'Sebuah kisah SMA',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Death Note',
            'photo' => '/image/death_note.jpg',
            'description' => 'Sebuah kisah misteri yang menegangkan',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Titans',
            'photo' => '/image/titans.jpg',
            'description' => 'Sebuah kisah kelompok pahlawan pemberantas kejahatan',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Sherlock Holmes',
            'photo' => '/image/sherlock_holmes.jpg',
            'description' => 'Menceritakan seorang detektif yang selalu menyelesaikan kasus kejahatan',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Umbrella Academy',
            'photo' => '/image/umbrella_academy.jpg',
            'description' => 'Sebuah kisah kelompok superhuman yang mencoba mengerti satu sama lain',
            'rating' => 3,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'The Boys',
            'photo' => '/image/the_boys.jpg',
            'description' => 'Menceritakan sebuah dunia dengan sekumpulan pahlawan yang bukan pahlawan',
            'rating' => 4,
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Mama & AA',
            'photo' => '/image/mamah_dan_aa.jpg',
            'description' => 'Sebuah diskusi kehidupan',
            'rating' => 3,
        ]);
    }
}
