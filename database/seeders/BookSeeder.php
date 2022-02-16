<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Book::create([
            'name' => 'Old Man And The Sea',
            'bookcase' => 1,
            'author' => 'Chika Ike',
            'user_id' => 1
        ]);
    }
}
