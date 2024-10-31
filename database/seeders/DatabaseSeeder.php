<?php

namespace Database\Seeders;

use App\Models\Etudiant;
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
        Etudiant::factory(30)->create();
        // \App\Models\User::factory(10)->create();
       // $this->call(ClassesTableSeeder::class);
    }
}
