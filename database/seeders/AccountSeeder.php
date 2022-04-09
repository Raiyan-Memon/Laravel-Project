<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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


        for ($i = 0; $i < 20; $i++) {

            $account = new Account;
            $account->user_name = $faker->name;
            $account->first_name = $faker->name;
            $account->last_name = $faker->name;
            $account->dob = $faker->date;
            $account->phone =  "324";
            $account->email =  $faker->email;
            $account->address =  $faker->address;
            $account->hobby = ["cricket", "badminton"];
            $account->gender = "male";
            $account->country = "india";
            $account->state = "up";
            $account->save();
        }

        // Schema::create('users', function (Blueprint $table) {
        //     $table->uuid('id')->primary()->unique();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();

        //     $table->string('google_id')->nullable();
        // });

        // Schema::create('contacts', function (Blueprint $table) {

        //     $table->uuid('id')->primary()->unique()->nullable();
        //     $table->string('name')->nullable();
        //     $table->string('email')->nullable();
        //     $table->integer('phone')->nullable();
        //     $table->uuid('account_id')->foreign()->references('id')->nullable();
        //     $table->timestamps();
        // });
    }
}