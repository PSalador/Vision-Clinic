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

        /*
        $faker = Faker\Factory::create('ru_RU'); // create a French faker
        for ($i = 0; $i < 100; $i++) {
            /*
            \App\Core\Models\Patient::create([
                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'street'     => $faker->streetAddress,
                'city'       => $faker->city,
                'phone'      => $faker->phoneNumber,
                'email'      => $faker->email,
            ]);
            */

        /*
            \App\Core\Models\Invoice::create([
                'invoice_date' => new \Carbon\Carbon(),
                'invoice_due'=> new \Carbon\Carbon(),
                'invoice_status' => 1,
                'ship_date' =>  new \Carbon\Carbon(),
                'patient_id' => \App\Core\Models\Patient::inRandomOrder()->first()->id
            ]);


            /*
                    \App\Core\Models\Product::create([
                        'name' => $faker->company,
                        'msrp' => rand(0,1000),
                        'descriptions' => $faker->realText(200),
                        'image' => $faker->imageUrl(),
                        'category' => $faker->jobTitle,
                    ]);
            */

/*
            \App\Core\Models\InvoiceDetail::create([
                'quantity'   => rand(1, 50),
                'unit_price' => rand(0, 5000),
                'invoice_id' => \App\Core\Models\Invoice::inRandomOrder()->first()->id,
                'product_id' => \App\Core\Models\Product::inRandomOrder()->first()->id,
            ]);


            \App\Core\Models\Appointment::create([
                'appointment_time' => new \Carbon\Carbon(),
                'appointment_type' => rand(0, 1),
                'doctor_notes'     => $faker->realText(200),
                'patient_id'       => \App\Core\Models\Patient::inRandomOrder()->first()->id,
            ]);



        }

*/

        $this->call(ProductsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}
