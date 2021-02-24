<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\FavoriteBook;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
         $this->call([
            UserSeeder::class,

        ]);
   
    }
}
