<?php

use App\Movie;
use Illuminate\Database\Seeder;

class movieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class, 100)->create();
    }
}
