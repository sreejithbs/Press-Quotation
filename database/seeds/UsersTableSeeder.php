<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new User;
        $manager->firstname = "Manager";
        $manager->lastname = "Demo";
        $manager->email = "manager@demo.com";
        $manager->password = bcrypt(123456);
        $manager->role = "manager";
        $manager->save();

        $accountant = new User;
        $accountant->firstname = "Accountant";
        $accountant->lastname = "Demo";
        $accountant->email = "accountant@demo.com";
        $accountant->password = bcrypt(123456);
        $accountant->role = "accountant";
        $accountant->save();


    }
}
