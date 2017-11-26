<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $singlecolor = new Color;
        $singlecolor->name = "Single Color";
        $singlecolor->save();

        $multicolor = new Color;
        $multicolor->name = "Multi Color";
        $multicolor->save();
    }
}
