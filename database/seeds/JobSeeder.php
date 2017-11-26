<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job1 = new Job;
        $job1->name = "DTP";
        $job1->save();

        $job2 = new Job;
        $job2->name = "Designing";
        $job2->save();

        $job3 = new Job;
        $job3->name = "Binding";
        $job3->save();

        $job4 = new Job;
        $job4->name = "Slicing";
        $job4->save();

    }
}
