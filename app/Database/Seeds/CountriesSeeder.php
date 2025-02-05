<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        $faker=Factory::create();
        $countries=[];
        for($i=0; $i<15; $i++){
            $countries[]=[
                'name'=>$faker->country,
                'created_at'=>($created_at=$faker->dateTime())->format('Y-m-d H:i:s'),
                'updated_at'=>$faker->dateTimeBetween($created_at)->format('Y-m-d H:i:s'),
            ];
        }
        $builder=$this->db->table('countries');
        $builder->insertBatch($countries);
    }
}
