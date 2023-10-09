<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ToursTableSeeder::class);
        $this->call(PhotoTourTableSeeder::class);
        // $this->call(DatesTableSeeder::class);
        // $this->call(PhotosTableSeeder::class);
    }
}
