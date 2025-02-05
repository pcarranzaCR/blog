<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $faker=Factory::create();
        $groups=[
            [
                'name_group'=>'admin',
                'created_at'=>($created_at=$faker->dateTime())->format('Y-m-d H:i:s'),
                'updated_at'=>$faker->dateTimeBetween($created_at)->format('Y-m-d H:i:s')
            ],
            [
                'name_group'=>'user',
                'created_at'=>($created_at=$faker->dateTime())->format('Y-m-d H:i:s'),
                'updated_at'=>$faker->dateTimeBetween($created_at)->format('Y-m-d H:i:s')
            ],
        ];
        $builder=$this->db->table('groups');
        $builder->insertBatch($groups);
    }
}
