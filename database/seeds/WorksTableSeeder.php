<?php

use Illuminate\Database\Seeder;
use App\Work;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Work;
        $book->name = "Book";
        $book->price = 45;
        $book->save();

        $poster = new Work;
        $poster->name = "Poster";
        $poster->price = 25;
        $poster->save();

        $notice = new Work;
        $notice->name = "Notice";
        $notice->price = 15;
        $notice->save();

        $billbook = new Work;
        $billbook->name = "BillBook";
        $billbook->price = 89;
        $billbook->save();
    }
}
