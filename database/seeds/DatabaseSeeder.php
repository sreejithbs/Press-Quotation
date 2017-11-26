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
        $this->call(WorksTableSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(PaperSeeder::class);
        $this->call(QualitySeeder::class);
        $this->call(BindingSeeder::class);
        $this->call(JobSeeder::class);
    }
}
