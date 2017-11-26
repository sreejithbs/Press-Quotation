<?php

use Illuminate\Database\Seeder;
use App\Binding;

class BindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binding1 = new Binding;
        $binding1->name = "Spiral";
        $binding1->save();

        $binding2 = new Binding;
        $binding2->name = "Normal";
        $binding2->save();

        $binding3 = new Binding;
        $binding3->name = "HardCover";
        $binding3->save();

        $binding4 = new Binding;
        $binding4->name = "PaperBack";
        $binding4->save();
    }
}
