<?php

use Illuminate\Database\Seeder;

// 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GalleryProduct::class);
        $this->call(UsersTableSeeder::class);
        // $this->call(CommentTableSeeder::class);
        // $this->call(OrderDetailSeeder::class);
    }
}
