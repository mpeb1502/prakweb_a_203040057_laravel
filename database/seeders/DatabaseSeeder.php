<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Febrian Fauzan Rachman',
            'username' => 'mpeb',
            'email' => 'febrianfauzan860@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Muhammad Rafi',
        //     'email' => 'mrafi60@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();



        // Post::create([
        //     'title' => 'Slank',
        //     'slug' => 'Ku Tak Bisa',
        //     'excerpt' => 'Pernah berpikir tuk pergi,Dan terlintas tinggalkan kau sendiri,Sempat ingin sudahi sampai di sini,Coba lari dari kenyataan',
        //     'body' => 'Pernah berpikir tuk pergi,Dan terlintas tinggalkan kau sendiri,Sempat ingin sudahi sampai di sini,Coba lari dari kenyataan. Tapi ku tak bisa,Jauh,Jauh darimu,Ku tak bisa jauh,Jauh darimu.,Lalu mau apa lagi,Kalau kita sudah gak saling mengerti,Sampai kapan bertahan seperti ini,Dua hati bercampur emosi,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Peterpan',
        //     'slug' => 'Kupu-kupu Malam',
        //     'excerpt' => 'Ada yang benci dirinya,Ada yang butuh dirinya,Ada yang berlutut mencintanya,Ada pula yang kejam menyiksa dirinya',
        //     'body' => 'Ada yang benci dirinya,Ada yang butuh dirinya,Ada yang berlutut mencintanya,Ada pula yang kejam menyiksa dirinya Kini hidup wanita si kupu-kupu malam,Bekerja bertaruh seluruh jiwa raga,Bibir senyum kata halus merayu memanja,Kepada setiap mereka yang datang,Oh apa yang terjadi. terjadilah,Yang dia tahu Tuhan penyayang umatnya,Oh apa yang terjadi. terjadilah,Yang dia tahu hanyalah menyambung nyawa,',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Ungu',
        //     'slug' => 'Untukmu Selamanya',
        //     'excerpt' => 'Tak pernah aku mengerti,Apa yang kini kurasakan,Kegelisahan hatiku saat ini',
        //     'body' => 'Tak pernah aku mengerti,Apa yang kini kurasakan,Kegelisahan hatiku saat iniKu masih merindukanmu,Walaupun kini ku telah bersamanya,Tak pernah mampu ku coba,lupakanmu,Sungguh tak bisa,Ku mengganti dirimu dengan dirinya,Sungguh tak sanggup,Aku berpaling darimu,Sungguh tak bisa,Ku mencintainya tuk melupakanmu,Sungguh tak sanggup,Aku berpindah dari hatimu,',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Utopia',
        //     'slug' => 'Hujan',
        //     'excerpt' => 'Rinai hujan basahi aku,temani sepi yang mengendap,kala aku mengingatmu,dan semua saat manis itu,Segalanya seperti mimpi,kujalani hidup sendiri,andai waktu berganti,aku tetap tak kan berubah',
        //     'body' => 'Rinai hujan basahi aku,temani sepi yang mengendap,kala aku mengingatmu,dan semua saat manis itu,Segalanya seperti mimpi,kujalani hidup sendiri,andai waktu berganti,aku tetap tak kan berubah,Aku selalu bahagia,saat hujan turun,karena aku dapat mengenangmu,untukku sendiri ooohhh..ooo,Selalu ada cerita,tersimpan di hatiku,tentang kau dan hujan,tentang cinta kita,yang mengalir seperti air,Aku selalu bahagia,saat hujan turun,karena aku dapat mengenangmu,untukku sendiri ooohhh..ooo,Aku bisa tersenyum sepanjang hari,karena hujan pernah menahanmu disini,untukku ooohhh...',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
