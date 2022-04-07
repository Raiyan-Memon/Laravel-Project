<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;
use Faker\Factory as Faker;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        for($i=0;$i<20;$i++)
        {

        $account = new Account;
        $account->user_name = $faker->name;
        $account->first_name = $faker->name;
        $account->last_name = $faker->name;
        $account->dob = $faker->date;
        $account->phone =  "324";
        $account->email =  $faker->email;
        $account->address =  $faker->address
        ;
        $account->hobby = ["cricket","badminton"];
        $account->gender = "male";
        $account->country = "india";
        $account->state = "up";
        $account->save();
    }
    }
}
