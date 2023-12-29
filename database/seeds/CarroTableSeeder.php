<?php

use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Carro::create(['marca' => 'Toyota', 'modelo' => 'Corolla', 'ano' => 2022]);
        Carro::create(['marca' => 'Honda', 'modelo' => 'Civic', 'ano' => 2020]);
        Carro::create(['marca' => 'Ford', 'modelo' => 'Mustang', 'ano' => 2021]);
        Carro::create(['marca' => 'Chevrolet', 'modelo' => 'Camaro', 'ano' => 2019]);
        Carro::create(['marca' => 'Tesla', 'modelo' => 'Model S', 'ano' => 2022]);
        Carro::create(['marca' => 'BMW', 'modelo' => 'X5', 'ano' => 2020]);
        Carro::create(['marca' => 'Mercedes-Benz', 'modelo' => 'C-Class', 'ano' => 2021]);
        Carro::create(['marca' => 'Audi', 'modelo' => 'A4', 'ano' => 2018]);
        Carro::create(['marca' => 'Hyundai', 'modelo' => 'Tucson', 'ano' => 2022]);
        Carro::create(['marca' => 'Nissan', 'modelo' => 'Altima', 'ano' => 2019]);
        Carro::create(['marca' => 'Jeep', 'modelo' => 'Wrangler', 'ano' => 2020]);
        Carro::create(['marca' => 'Volkswagen', 'modelo' => 'Golf', 'ano' => 2021]);
        Carro::create(['marca' => 'Subaru', 'modelo' => 'Outback', 'ano' => 2018]);
        Carro::create(['marca' => 'Mazda', 'modelo' => 'CX-5', 'ano' => 2022]);
        Carro::create(['marca' => 'Kia', 'modelo' => 'Sportage', 'ano' => 2017]);
        Carro::create(['marca' => 'Lexus', 'modelo' => 'RX', 'ano' => 2021]);
        Carro::create(['marca' => 'Jaguar', 'modelo' => 'F-PACE', 'ano' => 2020]);
        Carro::create(['marca' => 'Land Rover', 'modelo' => 'Discovery', 'ano' => 2019]);
        Carro::create(['marca' => 'Porsche', 'modelo' => '911', 'ano' => 2022]);
        Carro::create(['marca' => 'Ferrari', 'modelo' => '488 GTB', 'ano' => 2018]);
    }
}
