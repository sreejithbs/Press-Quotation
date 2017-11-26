<?php

use Illuminate\Database\Seeder;
use App\Paper;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paper1 = new Paper;
        $paper1->name = "70 GSM";
        $paper1->save();

        $paper2 = new Paper;
        $paper2->name = "80 GSM";
        $paper2->save();
    }
}
