<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Core\Models\Patient::class, 50)->create()->each(function ($u) {
            $u->appointments()->saveMany(factory(App\Core\Models\Appointment::class, 100)->make());
            $u->invoices()->saveMany(factory(App\Core\Models\Invoice::class, 100)->make());
        });
    }
}
