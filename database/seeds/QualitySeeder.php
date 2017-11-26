<?php

use Illuminate\Database\Seeder;
use App\Quality;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matte = new Quality;
	    $matte->name = "Matte";
	    $matte->save();

	    $glossy = new Quality;
	    $glossy->name = "Glossy";
	    $glossy->save();
    }
}
