<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        for ($i = 0; $i < 10; $i++) {

            $contact = new Contact;

            $contact->name = $faker->name;
            $contact->email =  $faker->email;
            $contact->phone =  "324";
            $contact->save();
        }
    }
}